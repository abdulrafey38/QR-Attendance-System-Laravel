<?php

namespace App\Http\Controllers;

use App\Attendance;
use App\Course;
use App\Mail\ReportMail;
use App\SectionCourse;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Validator;

class FacultyController extends Controller
{

    /**
     * FacultyController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth:instructor')->except('attendanceShowToStudent');
    }

    public function viewAttendanceStudent(Request $request)
    {
        $course = Course::find($request->course_id);
        $section = SectionCourse::where('id', $request->section_id)->with('students')->first();


        return view('student_view', ['course' => $course, 'section' => $section]);
    }

    public function facultyteachcourse()
    {
        return view('facultyteachcourse');
    }

    public function dashboardView()
    {
        return view('facultyindex');
    }

    public function viewAttendanceMark(Request $request)
    {
        $time = Date('H:i:s');
        $date = Carbon::now()->toDateString();
        $course = Course::find($request->course_id);
        $attendances = Attendance::where('course_id', $request->course_id)
            ->where('section_id', $request->section_id)->where('date', $date)->where('attendance', 'P')->with('student')->get();

        $section = SectionCourse::where('id', $request->section_id)->with('students')->first();
//        dd($section);
        $qr_value =  $date . ',' . $request->course_id . ',' . $request->section_id . ',' ."P" . ',' . $time;
        return view('mark_attendance', ['course' => $course,
            'attendances' => $attendances, 'qr_value' => $qr_value, 'section' => $section]);
    }

    public function storeAttendance(Request $request, $section_id, $course_id)
    {
//        dd($section_id);
        $date = Carbon::now()->toDateString();
        Attendance::where('course_id', $course_id)->where('section_id', $section_id)
            ->where('date', $date)->delete();

        foreach ($request->student as $student) {
            $attendance = new Attendance();
            $attendance->date = $date;
            $attendance->student_id = $student['id'];
            $attendance->section_id = $section_id;
            $attendance->course_id = $course_id;
            if (isset($student['present'])) {
                $attendance->attendance = 'P';
            } else {
                $attendance->attendance = 'A';
            }
            $attendance->save();
        }
        $attendances = Attendance::where('course_id', $course_id)->where('section_id', $section_id)
            ->where('date', $date)->get();

        if (isset($request->report)) {
            if (!empty($attendances[0])) {
                Mail::to(Auth::guard('instructor')->user()->email)->send(new ReportMail($attendances));
            }
        }


        return redirect('ManageCourses')->with(['successMark' => 'yes']);
    }


    public function studentAttendanceShow($student, $course, $section)
    {
        $attendances = Attendance::where('course_id', $course)
            ->where('section_id', $section)->where('student_id', $student)->orderBy('date')->get();
        $student = User::find($student);
        return view('student_attendance_detail', compact('attendances', 'student'));
    }

    public function attendanceShowToStudent($course)
    {
        $student = Auth::user()->id;
        $attendances = Attendance::where('course_id', $course)->where('student_id', $student)->orderBy('date')->get();
        $student = User::find($student);
        return view('student_attendance_detail', compact('attendances', 'student'));
    }


    public function attendanceUpdate($id)
    {
        $att = Attendance::find($id);
        if ($att->attendance === 'P') {
            $att->attendance = 'A';
        } else {
            $att->attendance = 'P';
        }

        $att->save();

        return redirect()->back()->with(['pSuccess' => 'updated']);
    }

}
