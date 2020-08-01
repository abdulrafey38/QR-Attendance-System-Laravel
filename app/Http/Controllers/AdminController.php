<?php

namespace App\Http\Controllers;

use App\Attendance;
use App\ContactUs;
use App\Course;
use App\Department;
use App\FacultyCourse;
use App\Instructor;
use App\Mail\WelcomeMail;
use App\Program;
use App\Section;
use App\SectionCourse;
use App\Semester;
use App\StudentCourse;
use App\StudentSection;
use App\User;
use App\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Validator;

class AdminController extends Controller
{
    public function loginView()
    {
        if (Auth::guard('admin')->check()) {
            return redirect('/admin/dashboard');
        }


        return view('admin.login');
    }

    public function login(Request $request)
    {
        $cre = $request->only(['email', 'password']);
        if (Auth::guard('admin')->attempt($cre)) {
            return redirect('/admin/dashboard');
        }
        return redirect()->back()->with(['error' => 'Wrong Credentials.']);
    }

    public function dashboardView()
    {
        return view('admin.index');
    }

    // logout
    public function logOut()
    {
        Auth::guard('admin')->logout();

        return redirect('/admin');
    }

    //faculty
    public function facultyView()
    {
        $fals = Instructor::with('courses')->get();
        return view('admin.faculty', ['faculties' => $fals]);
    }

    //student view
    public function studentView()
    {
        $std = User::orderBy('name')->get();
        return view('admin.student', ['students' => $std]);
    }


    // admin profile
    public function profileView()
    {
        return view('admin.profile', ['admin' => Auth::guard('admin')->user()]);
    }

    // password change
    public function passwordChane(Request $request)
    {
        if (!Hash::check($request->old_password, Auth::guard('admin')->user()->password)) {

            return redirect()->back()
                ->with(['error' => 'Old password is incorrect.']);

        }

        $validator = Validator::make($request->all(),
            [
                'password' => 'required|confirmed',
            ],
            [
                'password.confirmed' => 'New password and confirmed password not matched.'
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator);
        }
        Auth::guard('admin')->user()->update(['password' => bcrypt($request->password)]);
        return redirect()->back()->with(['success' => 'Password successfully changed']);

    }

    public function profileUpdate(Request $request)
    {
        $user = Auth::guard('admin')->user();
        $user->email = $request->email;
        $user->name = $request->name;
        $user->save();
        return redirect()->back()->with(['success' => 'Profile updated successfully.']);
    }


    // faculty store
    public function facultyStore(Request $request)
    {

        $validate = Validator::make($request->all(), [
            'f_id' => 'max:8|min:6',
            'f_id' => 'unique:instructors,I_SID',
            'department' => 'required',
            'email' => 'unique:instructors',
            'gender' => 'required',
        ], [
            'f_id.unique' => 'Faculty Id Already Exists',
            'department.required' => 'Please select the department.',
            'email.unique' => 'This email has Already been taken.',
            'gender.required' => 'Please select the Gender.',
        ]);

        if ($validate->fails()) {
            return redirect()
                ->back()->withErrors($validate)->withInput();
        }

        $faculty = new Instructor();
        $faculty->name = $request->name;
        $faculty->password = bcrypt($request->password);
        $faculty->email = $request->email;
        $faculty->I_gender = $request->gender;
        $faculty->I_phone = $request->phone_number;
        $faculty->I_Dep = $request->department;
        $faculty->I_SID = strtoupper($request->f_id);
        $faculty->I_dob = $request->DOB;

        $path = '';
        if ($request->hasFile('image')) {
            $imageFile = $request->file('image');
            $imageName = str_random(15) . '.' . $imageFile->getClientOriginalExtension();

            $path = $imageFile->move('uploads/images/', $imageName);
        }
        $faculty->image = $path;


        $faculty->save();
        $message = new Instructor();
        $message->name = $faculty->name;
        $message->department = $faculty->department();
        $message->login_id = $faculty->I_SID;
        $message->password = $request->password;
//        dd($message->name);
        Mail::to($faculty->email)->send(new WelcomeMail($message));

//        foreach ($request->courses as $cours) {
//            $new = new  FacultyCourse();
//            $new->faculty_id = $faculty->id;
//            $new->course_id = $cours;
//            $new->save();
//        }

        return redirect('/faculty/view')->with(['success' => 'Save & Email Sent.']);
    }

    public function studentStore(Request $request, $id = null)
    {

        $validate = Validator::make($request->all(), [
            's_id' => 'max:8|min:6',
            's_id' => 'unique:users,S_UID',
            'department' => 'required',
            'email' => 'unique:users',
            'gender' => 'required',
            'courses' => 'required',
        ], [
            's_id.unique' => 'Student Id Already Exists',
            'department.required' => 'Please select the department.',
            'emil.unique' => 'This email has Already been taken.',
            'gender.required' => 'Please select the Gender.',
            'courses.required' => 'Please select at least one subject.',
        ]);

        if ($validate->fails()) {
            return redirect()
                ->back()->withErrors($validate)->withInput();
        }

        if ($id != null) {
            $user = User::findOrFail($id);
            StudentSection::where('student_id', $id)->delete();
            if (file_exists($user->image)) {
                unlink($user->image);
            }
        } else {
            $user = new User();
            $user->S_UID = strtoupper($request->s_id);
        }

        $user->name = $request->name;
        $user->badge = $request->badge;
        $user->password = bcrypt($request->password);
        $user->email = $request->email;
        $user->S_gender = $request->gender;
        $user->S_phone = $request->phone_number;
        $user->S_Dep = $request->department;

        $user->S_dob = $request->DOB;

        $path = '';
        if ($request->hasFile('image')) {

            $imageFile = $request->file('image');
            $imageName = str_random(15) . '.' . $imageFile->getClientOriginalExtension();

            $path = $imageFile->move('uploads/images/', $imageName);
        }
        $user->image = $path;

        $user->save();


        foreach ($request->courses as $cours) {
            if (isset($cours['section_id'])) {
                $new = new  StudentSection();
                $new->student_id = $user->id;
                $new->section_id = $cours['section_id'];
                $new->save();
            }
        }
//        if ($id === null) {
//            $message = new User();
//            $message->name = $user->name;
//            $message->department = $user->department();
//            $message->login_id = $user->S_UID;
//            $message->password = $request->password;
//            Mail::to($user->email)->send(new WelcomeMail($message));
//        }

        return redirect('/admin/student/view')->with(['success' => 'save successfully.']);
    }


    public function facultyDelete($id)
    {
        FacultyCourse::where('faculty_id', $id)->delete();
        SectionCourse::where('faculty_id',$id)->delete();
        $faculty = Instructor::find($id);
        if (file_exists($faculty->image)) {
            unlink($faculty->image);
        }
        $faculty->delete();

        return redirect('/faculty/view')->with(['success' => 'deleted successfully.']);
    }




    public function studentDelete($id)
    {
        StudentCourse::where('student_id', $id)->delete();

        $user = User::find($id);
        if (file_exists($user->image)) {
            unlink($user->image);
        }
        $user->delete();

        return redirect('/admin/student/view')->with(['success' => 'deleted successfully.']);
    }

    public function faccultyDelete($id)
    {


        FacultyCourse::where('faculty_id',$id)->delete();
        SectionCourse::where('faculty_id',$id)->delete();




        $user = Instructor::find($id);
        if (file_exists($user->image)) {
            unlink($user->image);
        }
        $user->delete();

        return redirect()->back()->with(['success' => 'deleted successfully.']);
    }

    public function facultyEdit($id)
    {
        $faculty = Instructor::where('id', $id)->with('courses')->first();

        return view('admin.edit-faculty', ['faculty' => $faculty]);
    }

    public function studentEdit($id)
    {
        $user = User::where('id', $id)->first();

        return view('admin.edit-student', ['user' => $user]);
    }

    public function facultyUpdate(Request $request, $id)
    {
        $faculty = Instructor::find($id);

        $faculty->name = $request->name;
        $faculty->email = $request->email;
        $faculty->I_gender = $request->gender;
        $faculty->I_phone = $request->phone_number;
        $faculty->I_Dep = $request->department;
        $faculty->I_SID = $request->f_id;
        $faculty->I_dob = '1990-11-01';

        $path = '';
        if ($request->hasFile('image')) {

            if (file_exists($faculty->image)) {
                unlink($faculty->image);
            }

            $imageFile = $request->file('image');
            $imageName = str_random(15) . '.' . $imageFile->getClientOriginalExtension();

            $path = $imageFile->move('uploads/images/', $imageName);
        }
        $faculty->image = $path;


        $faculty->save();

//        FacultyCourse::where('faculty_id', $id)->delete();
//
//        foreach ($request->courses as $cours) {
//            $new = new  FacultyCourse();
//            $new->faculty_id = $faculty->id;
//            $new->course_id = $cours;
//            $new->save();
//        }

        return redirect('/faculty/view')->with(['success' => 'updated successfully.']);
    }


    // video view
    public function videoView()
    {
        $videos = Video::with('faculty')->get();

        return view('admin.video', compact('videos'));
    }

    //
    public function storeVideo(Request $request)
    {
        // dd($request->all());
        $video = new Video();
        $video->faculty_id = $request->faculty_id;
        $video->title = $request->title;

        $path = '';
        if ($request->hasFile('video')) {
            $videoFile = $request->file('video');
            $videoName = str_random(15) . '.' . $videoFile->getClientOriginalExtension();

            $path = $videoFile->move('uploads/video/', $videoName);
        }
        $video->file_path = $path;
        $video->save();
        return redirect()->back()->with(['success' => 'Video uploaded successfully.']);
    }

    public function videoDelete($id)
    {
        $video = Video::find($id);

        if (file_exists($video->file_path)) {
            unlink($video->file_path);
        }

        $video->delete();
        return redirect()->back()->with(['success' => 'Video deleted successfully.']);
    }

    public function requestDelete($id)
    {
        ContactUs::find($id)->delete();
        return redirect()->back()->with(['success' => 'Deleted successfully.']);
    }

    public function contactView()
    {
        return view('admin.contact');
    }

    // section handle


    public function sectionStore(Request $request)
    {
        $validate = Validator::make($request->all(), [

            'name' => 'unique:sections',
        ], [
            'name.unique' => 'This Section has Already exist.',

        ]);

        if ($validate->fails()) {
            return redirect()
                ->back()->withErrors($validate)->withInput();
        }

        $secStore = new Section();
        $secStore->name = $request->name;
        $secStore->save();

        return redirect('/section/view')->with(['success' => 'Section added successfully.']);
    }

    public function sectionView()
    {
        $sec = Section::all();
        return view('admin.addsection', ['sections' => $sec]);
    }

    public function sectionDelete($id)
    {
        SectionCourse::where('section_id', $id)->delete();
        Section::find($id)->delete();
        return redirect()->back()->with(['success' => 'Deleted successfully.']);
    }
//section course deleter assign teacher deleter


    public function sectioncourseDelete($id)
    {
        Attendance::where('section_id',$id)->delete();
        StudentSection::where('section_id',$id)->delete();
        SectionCourse::find($id)->delete();
        return redirect()->back()->with(['success' => 'Deleted successfully.']);
    }

    protected function facultydelhelper($id)
{

    StudentSection::where('faculty_id',$id)->delete();
    SectionCourse::where('faculty_id',$id)->delete();
    return redirect()->back()->with(['success' => 'Deleted successfully.']);
}

//corses handle


    public function courseView()
    {
        $crs = Course::all();
        return view('admin.course', ['courses' => $crs]);
    }


    // faculty store
    public function courseStore(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'semester' => 'required',
        ], [
            'courses.required' => 'Please select at least one subject.',
        ]);

        if ($validate->fails()) {
            return redirect()
                ->back()->withErrors($validate)->withInput();
        }

        $course = new Course();
        $course->name = $request->name;
        $course->credit_hour = $request->credit_hour;
        $course->course_code = $request->course_code;
        $course->semester_id = $request->semester;

        $course->save();

        return redirect('/course/view')->with(['success' => 'Course added successfully.']);
    }

    public function courseDelete($id)
    {
        SectionCourse::where('course_id',$id)->delete();
        FacultyCourse::where('course_id', $id)->delete();
        StudentCourse::where('course_id', $id)->delete();
        Course::find($id)->delete();
        return redirect()->back()->with(['success' => 'Deleted successfully.']);
    }

    public function viewSection()
    {
        return view('admin.section');
    }

    public function storeSection(Request $request)
    {
        $new = new SectionCourse();
        $new->section_id = $request->section_id;
        $new->course_id = $request->course_id;
        $new->faculty_id = $request->faculty_id;
        $new->save();

        return redirect()->back()->with(['success' => 'Added successfully.']);
    }

    //program handle


    public function viewProgram()
    {
        $dep = Department::all();
        return view('admin.program', ['departments' => $dep]);
    }


    public function programstore(Request $request)
    {

        $validate = Validator::make($request->all(), [
            'name' => 'required',
            'name' => 'unique:programs',
            'department_id' => 'required',
        ], [
            'name.required' => 'Please select the Name.',
            'department_id.required' => 'Please select the department.',
            'name.unique' => 'This Program has Already exist.',

        ]);

        if ($validate->fails()) {
            return redirect()
                ->back()->withErrors($validate)->withInput();
        }

        $new = new Program();
        $new->name = $request->name;
        $new->department_id = $request->department_id;
        $new->save();

        return redirect()->back()->with(['success' => 'Added successfully.']);
    }

    public function programDelete($id)
    {

        Program::find($id)->delete();
        return redirect()->back()->with(['success' => 'Deleted successfully.']);
    }

//semester

    public function viewSemester()
    {
        $Semester = Semester::all();
        $program = Program::all();
        return view('admin.semester', ['Semester' => $Semester],['Program'=>$program]);
    }


    public function semesterstore(Request $request)
    {

        $validate = Validator::make($request->all(), [
            'name' => 'required',
            'program_id' => 'required',
        ], [
            'name.required' => 'Please select the Name.',
            'program_id.required' => 'Please select the Program.',

        ]);

        if ($validate->fails()) {
            return redirect()
                ->back()->withErrors($validate)->withInput();
        }

        $new = new Semester();
        $new->name = $request->name;
        $new->program_id = $request->program_id;
        $new->save();

        return redirect()->back()->with(['success' => 'Added successfully.']);
    }

    public function semesterDelete($id)
    {

        Semester::find($id)->delete();
        return redirect()->back()->with(['success' => 'Deleted successfully.']);
    }
}
