<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactEmail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $address = $request->address;
        $company = $request->company;
        $start_date = $request->start_date;
        $budget = $request->budget;
        $user_message = $request->user_message;

        // return $message;

        $data = array(
            'name'=> $name,
            'email'=> $email,
            'address'=> $address,
            'company'=> $company,
            'start_date'=> $start_date,
            'budget'=> $budget,
            'user_message'=> $user_message
        );

        //The email sending is done using the to method on the Mail facade
        Mail::to('info@megapixeltech.com')->send(new ContactEmail($data));

        return back()->with('status', 'email-sent');
    }

    public function test(Request $request)
    {
        return $request;
    }
}
