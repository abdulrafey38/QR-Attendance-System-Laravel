<?php

namespace App\Http\Controllers;

use App\Course;
use App\course_related_announcements;
use App\course_related_material;
use App\Instructor;
use App\Program;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Validator;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:instructor,web');
    }

    Public Function index()
    {
        return view('facultyindex');
    }

    Public Function FacultyPortal()
    {
        return view('FacultyPortal');
    }

    Public Function ForgotPassword()
    {
        return view('auth.passwords.email');
    }

    Public Function ManageCourses()
    {
        $data = Auth::guard('instructor')->user()->sections()->get();

        return view('teacher_attendance', ['data' => $data]);
    }

    Public Function Course($id)
    {
        $course = Course::find($id);
        return view('Course', ['course' => $course]);
    }

    Public Function login()
    {
        return view('login');
    }

    Public Function FacultyList()
    {
        return view('FacultyList');
    }

    Public Function EditBasicInfo()
    {
        if (Auth::check()) {
            $user = Auth::user();
        }
        if (Auth::guard('instructor')->check()) {
            $user = Auth::guard('instructor')->user();
        }


        return view('EditBasicInfo', ['user' => $user]);
    }

    Public Function CRM($id)
    {
        $data1 = course_related_material::where('C_ID', $id)->with('course.semester')->get();

        return view('CRM', ['data1' => $data1, 'course_id' => $id]);
    }

    Public Function CA($id)
    {
        $data = course_related_announcements::where('C_ID', $id)->with('course.semester')->get();
        return view('CA', ['data' => $data, 'course_id' => $id]);

    }

    Public Function UpdateCourseRelatedMaterial($id)
    {
        return view('UpdateCourseRelatedMaterial', ['course_id' => $id]);
    }

    Public Function updateCA(Request $request)
    {


    }

    public Function DeleteCourseRelatedMaterial($id)
    {
        $crm = course_related_material::where('CRM_ID', $id)->first();
        if (file_exists($crm->CRM_file)) {
            unlink($crm->CRM_file);
        }

        $crm->delete();

        return redirect()->back();
    }

    Public Function DeleteCourseAnnouncement($id)
    {
        $ca = course_related_announcements::where('CA_ID', $id)->first();
        if (file_exists($ca->CA_file)) {
            unlink($ca->CA_file);
        }

        $ca->delete();

        return redirect()->back();
    }

    Public Function UpdateCourse()
    {
        $semester = null;
        $courses = null;
        return view('UpdateCourse', compact('semester', 'courses'));
    }

    Public Function Program($id)
    {
        $program = Program::where('id', $id)->with('department')->with('semesters.courses')->first();
        return view('Program', ['program' => $program]);
    }

    Public Function FacultyMember($id)
    {
        $f = Instructor::where('id', $id)->with('courses')->first();
        return view('FacultyMember', ['faculty' => $f]);
    }

    public function add_CA(Request $request, $id)
    {
        $CA = new course_related_announcements([
            'CA_Name' => $request->get('name'),
            'CA_type' => $request->get('Announcement'),
            'C_ID' => $id,
            'CA_des' => $request->get('Description'),
            'created_at' => $request->get('date')
        ]);

        if ($request->hasFile('file')) {

            $image = $request->file('file');
            $imageName = str_random(15) . '.' . $image->getClientOriginalExtension();
            $path = $image->move('upload/files', $imageName);
            $CA->CRM_file = $path;
        }

        $CA->save();
        return redirect('/CA/' . $id);
    }

    public function add_CRM(Request $request, $id)
    {
        $CRM = new course_related_material([
            'CRM_Name' => $request->get('name'),
            'CRM_type' => $request->get('Announcement'),
            'C_ID' => $id,
            'CRM_des' => $request->get('Description'),
            'created_at' => Carbon::parse($request->get('date'))->toDateString()
        ]);
        if ($request->hasFile('file')) {

            $image = $request->file('file');
            $imageName = str_random(15) . '.' . $image->getClientOriginalExtension();
            $path = $image->move('upload/files', $imageName);
            $CRM->CRM_file = $path;
        }

        $CRM->save();
        return redirect('/CRM/' . $id);
    }


    public function destroy1($CA_ID)
    {
        $CRM = course_related_announcements::find($CA_ID);
        $CRM->delete();
        return redirect('/CA?user=faculty');
    }

    public function editinfo(Request $request)
    {
        if (Auth::guard('web')->check()) {

            $user = Auth::user();
            $user->name = $request->input('Name');
            $user->S_phone = $request->input('Phone');
            $user->S_dob = $request->input('DOB');
            $user->email = $request->input('E-mail');

            $path = '';
            if ($request->hasFile('image')) {
                $imageFile = $request->file('image');
                $imageName = str_random(15) . '.' . $imageFile->getClientOriginalExtension();

                $path = $imageFile->move('uploads/images/', $imageName);
            }
            $user->image = $path;


            $user->save();
            return redirect('/StudentPortal')->with(['success' => 'ok']);
        }
        if (Auth::guard('instructor')->check()) {

            $user = Auth::user('instructor');
            $user->name = $request->input('Name');
            $user->I_phone = $request->input('Phone');
            $user->I_dob = $request->input('DOB');
            $user->email = $request->input('E-mail');

            $path = '';
            if ($request->hasFile('image')) {
                $imageFile = $request->file('image');
                $imageName = str_random(15) . '.' . $imageFile->getClientOriginalExtension();

                $path = $imageFile->move('uploads/images/', $imageName);
            }
            $user->image = $path;

            $user->save();
            return redirect('/FacultyPortal')->with(['success' => 'ok']);
        }

    }

    public function edit_CRM($id, Request $request)
    {
        $CRM = course_related_material::find($id);


        $CRM->CRM_Name = $request->get('name');
        $CRM->CRM_des = $request->get('Description');
        $CRM->created_at = Carbon::parse($request->get('date'))->toDateString();


        if ($request->hasFile('file')) {

            if (file_exists($CRM->CRM_file)) {
                unlink($CRM->CRM_file);
            }

            $image = $request->file('file');
            $imageName = str_random(15) . '.' . $image->getClientOriginalExtension();
            $path = $image->move('upload/files', $imageName);
            $CRM->CRM_file = $path;
        }

        $CRM->save();
        return redirect('/CRM/' . $CRM->C_ID);


    }

    public function UpdateCourseRelatedMaterial1($id)
    {
        return view('UpdateCourseRelatedMaterial1', ['course_id' => $id]);

    }

    public function edit_CA($id)
    {
        $ca = course_related_announcements::where('CA_ID', $id)->first();

        return view('ca-edit-view', ['ca' => $ca]);
    }

    public function UpdateCourseAnnouncement1($id)
    {
        return view('UpdateCourseAnnouncement', ['course_id' => $id]);
    }

    public function changePassword(Request $request)
    {
        $user = Auth::user();

        $curPassword = $request->input('curPassword');
        $newPassword = $request->input('newPassword');

        if (Hash::check($curPassword, $user->password)) {

            $user->password = Hash::make($newPassword);
            $user->save();

            return redirect('StudentPortal?user=student')->with('status', 'Password Change!');
        } else {
            return redirect('StudentPortal?user=student')->with('status', 'Invalid Password');
        }
    }


    public function editCrmView($id)
    {
        $crm = course_related_material::where('CRM_ID', $id)->first();

        return view('editCrm', ['crm' => $crm]);
    }


    public function caUpdate($id, Request $request)
    {
        $CA = course_related_announcements::find($id);


        $CA->CA_Name = $request->get('name');
        $CA->CA_des = $request->get('Description');
        $CA->created_at = Carbon::parse($request->get('date'))->toDateString();


        if ($request->hasFile('file')) {

            if (file_exists($CA->CA_file)) {
                unlink($CA->CA_file);
            }

            $image = $request->file('file');
            $imageName = str_random(15) . '.' . $image->getClientOriginalExtension();
            $path = $image->move('upload/files', $imageName);
            $CA->CA_file = $path;
        }

        $CA->save();
        return redirect('/CA/' . $CA->C_ID);

    }


    public function passwordChange()
    {
        return view('passwordUpdate');
    }





    public function passwordUpdate(Request $request)
    {
        $password = '';
        if (Auth::check()) {
            $password = Auth::user()->password;

        } else {
            $password = Auth::guard('instructor')->user()->password;

        }

        if (!Hash::check($request->old_password, $password)) {
            return redirect()->back()
                ->with(['error' => 'Old password is incorrect.']);

        }

        $validator = Validator::make($request->all(),
            ['password' => 'required|confirmed',],
            ['password.confirmed' => 'New password and confirmed password not matched.']
        );

        if ($validator->fails()) {
            return redirect()->back()
                ->with(['error' => 'Old password is incorrect.']);
        }


        if (Auth::check()) {
            Auth::user()->update(['password' => bcrypt($request->password)]);
        } else {
            Auth::guard('instructor')->user()->update(['password' => bcrypt($request->new_password)]);
        }

        return redirect('/home')->with(['pSuccess' => 'ok']);

    }
}


