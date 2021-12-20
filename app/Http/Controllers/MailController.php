<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class MailController extends Controller
{
    //
    public function test(Request $request)
    {
        $input = $request->all();

        Mail::send('mail/mailfb', array('name'=>$input["name"],'email'=>$input["email"], 'content'=>$input['comment']), function($message) use ($input)
        {
	        $message->to($input["email"], 'asd')->subject('Test mail Laravel !');
	    });
        // Session::flash('flash_message', 'Send message successfully!');

        return view('mail/welcome');
    }
}