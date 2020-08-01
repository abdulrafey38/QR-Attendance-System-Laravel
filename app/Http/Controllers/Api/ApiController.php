<?php

namespace App\Http\Controllers\Api;

use App\Attendance;
use App\Http\Controllers\Controller;
use App\SectionCourse;
use App\StudentSection;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Pusher\Pusher;

class ApiController extends Controller
{
    // login
    public function login(Request $request)
    {
        $checkFlag = false;
        $user_id = $request->S_UID;
        $students = User::select('S_UID')->get();
        foreach ($students as $student) {
            if (substr($student->S_UID, 0, 9) === substr(strtoupper($user_id), 0, 9)) {
                $checkFlag = true;
            }
        }
        if ($checkFlag) {
            $credentials = $request->only(['S_UID', 'password']);
            if (Auth::attempt($credentials)) {
                // user auth pass
                $user = Auth::user();
                $user->access_token = $user->createToken('MyApp')->accessToken;

                return response()->json([
                    'status' => true,
                    'data' => $user,
                    'message' => 'Login successfull.'
                ]);

            }
            return response()->json([
                'status' => false,
                'message' => 'Invalid Credentials.'
            ]);
        }

        return response()->json([
            'status' => false,
            'message' => 'ID format is invalid.'
        ]);
    }

    public function allCourses()
    {
        $data = Auth::user()->courses();
        return response()->json([
            'status' => true,
            'data' => $data,
            'message' => ''
        ]);
    }

    public function markAttendance(Request $request)
    {
        if (!StudentSection::where('section_id', $request->section_id)->exists()) {
            return response()->json([
                'status' => false,
                'message' => 'You are not enrolled in this section.'
            ]);
        }
        if (!SectionCourse::where('id', $request->section_id)->where('course_id', $request->course_id)->exists()) {
            return response()->json([
                'status' => false,
                'message' => 'Course not belong to this section.'
            ]);
        }
        if (Attendance::where('section_id', $request->section_id)
            ->where('student_id', Auth::id())
            ->where('course_id', $request->course_id)->where('date', Carbon::now()->toDateString())->exists()) {
            return response()->json([
                'status' => false,
                'message' => 'Attendance already marked.'
            ]);
        }

        $attendance = new Attendance();
        $attendance->date = Carbon::now()->toDateString();
        $attendance->student_id = Auth::id();
        $attendance->section_id = $request->section_id;
        $attendance->course_id = $request->course_id;
        $attendance->attendance = 'P';
        $attendance->save();

        $qr_value = 'COMSATS,' . $attendance->date . ',' . $request->course_id . ',' . $request->section_id;


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
            $user = Auth::user();
            $pusher->trigger($qr_value, 'event', $user);

        } catch (\Exception $exception) {

        }
        return response()->json([
            'status' => true,
            'message' => 'Attendance marked.'
        ]);
    }

    public function allAnnouncement()
    {
        $data = Auth::user()->courses();

        return response()->json([
            'status' => true,
            'data' => $data,
            'message' => ''
        ]);
    }

}
