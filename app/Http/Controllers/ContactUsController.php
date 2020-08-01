<?php

namespace App\Http\Controllers;

use App\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{

    public function store(Request $request)
    {
        $contact = new ContactUs();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->user_id = $request->user_id;
        $contact->message = $request->message;
        $contact->save();

        return redirect()->back()->with(['success' => 'Your request submitted successfully']);

    }


    public function show(ContactUs $contactUs)
    {

    }


    public function destroy(ContactUs $contactUs)
    {
        //
    }
}
