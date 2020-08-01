<?php

namespace App\Http\Controllers\Auth;

use App\Instructor;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param Request $request
     * @return \App\User
     */
    protected function create(Request $request)
    {
        if ((strcmp(substr(strtoupper($request->input('uid')), 0, 3), "BCS") && strcmp(substr(strtoupper($request->input('uid')), 0, 3), "BSE")) == 0) {
            User::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => Hash::make($request->input('password')),
                'S_gender' => $request->input('gender'),
                'S_phone' => $request->input('phone'),
                'S_dob' => $request->input('dob'),
                'S_Dep' => $request->input('dep'),
                'S_UID' => strtoupper($request->input('uid')),
            ]);
            return redirect('login')->with('status', 'Student Registered!');
        } else
            return redirect('login')->with('status', 'Invalid ID');
    }
}
