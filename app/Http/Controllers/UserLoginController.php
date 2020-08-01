<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class UserLoginController extends Controller
{

    //login view return
    public function loginView()
    {
        if (Auth::guard('instructor')->check() || Auth::check()) {
            return redirect('/home');
        }

        return view('login');
    }

// login
    public function login(Request $request)
    {
        $checkFlag = false;
        $user_id = $request->S_UID;
        $password = $request->password;
        $students = User::select('S_UID')->get();
        foreach ($students as $student) {
            if (substr($student->S_UID, 0, 9) === substr(strtoupper($user_id), 0, 9)) {
                $checkFlag = true;
            }
        }
        if ($checkFlag) {
            $credientials = $request->only(['S_UID', 'password']);
            if (Auth::attempt($credientials)) {
                // user

                return redirect('/home');
            }
            throw ValidationException::withMessages(['S_UID' => [trans('auth.failed')],]);
        }


        if ('FAC-' === substr(strtoupper($user_id), 0, 4)) {
            $credientials = ['I_SID' => $user_id, 'password' => $password];
            if (Auth::guard('instructor')->attempt($credientials)) {
                // faculty login

                return redirect('/home');
            }
            throw ValidationException::withMessages(['S_UID' => [trans('auth.failed')],]);
        }

        throw ValidationException::withMessages(['S_UID' => 'Invalid User ID format.',]);
    }


    // faculty logout
    public function facultyLogout()
    {
        Auth::guard('instructor')->logout();
        return redirect('/');

    }

    // student logout
    public function studentLogout()
    {
        Auth::logout();
        return redirect('/');

    }
}
