<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\sendemail;

class mailController extends Controller
{
    public function firemail(){

       
        return view('mail');
    }
    public function sendemail(Request $get){
    
        $email   = $get->email;
        $subject = $get->subject;
        $message = $get->message;

       Mail::to($email)->send(new sendemail($subject,$message));

        //return "Hello!";
    }
    
}
