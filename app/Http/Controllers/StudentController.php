<?php

namespace App\Http\Controllers;

use App\Attendance;
use App\Section;
use App\StudentCourse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Pusher\Pusher;

class StudentController extends Controller
{

    /**
     * StudentController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth')->except('test');
    }

    public function manageCourse()
    {
        $user = Auth::user();
        return view('student_attendance', ['user' => $user]);
    }

    public function courseStore(Request $request)
    {
        $new = new  StudentCourse();
        $new->student_id = Auth::id();
        $new->course_id = $request->course;
        $new->save();

        return redirect()->back()->with(['success' => 'ok']);
    }

    public function courseDelete($id)
    {
        StudentCourse::where('course_id', $id)->delete();
        return redirect()->back()->with(['deleted' => 'ok']);
    }


    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }


    public Function StudentPortal()
    {
        $user = Auth::user();
        $courses = $user->courses();

        return view('StudentPortal', compact('courses'));
    }


    public function test()
    {
        try {
            $options = array(
                'cluster' => 'ap2',
                'encrypted' => true
            );

            //Remember to set your credentials below.
            $pusher = new Pusher(
                '2536485dc36d05e71007',
                '617ea89acf8f11004a1e',
                '521176',
                $options
            );

            $pusher->trigger('att' , 'event', 'hjsdfbasd');

        } catch (\Exception $exception) {

        }
        return 'ok';
    }
}
