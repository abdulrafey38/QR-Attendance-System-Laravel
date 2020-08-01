<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class ContactController extends Controller
{
    public function create()
        {
            return view('Contact');
        }

     public function store(Request $request)
        {
            $this->validate($request,[
               'name' => 'required',
                'Email' => 'required|Email',
                'Phone' => 'required',
                'message' => 'required'

            ]);

         Mail::send('emails.contact-message',[
                'message' => $request->message

         ], function($mail) use ($request)
                {
                    $mail->from($request->Email, $request->name);

                    $mail->to('contact@comsat.edu.pk')->subject('Contact Message');
                });

                return redirect()->back()->with('flash_message','Thank you for your message');

        }
}
