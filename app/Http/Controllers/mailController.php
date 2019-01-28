<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\sendemail;
use Session;

class mailController extends Controller
{
    public function firemail(){

       
        return view('mail');
    }
    public function firesms(){

       
        return view('sms');
    }
    public function sendemail(Request $get){
    
        $email   = $get->email;
        $subject = $get->subject;
        $message = $get->message;

       Mail::to($email)->send(new sendemail($subject,$message));

        //return "Hello!";
    }
    public function sendsms(Request $request){
    

            $message = $request->input('message');
            $mobile = $request->input('mobile');
            $encodeMessage = urlencode('$message');
            $authkey = '';
            $senderId = '';
            $route = 4;
            $postData = $request->all();
            $mobileNumber = implode('', $postData['mobile'] );
            $arr = str_split($mobileNumber, '11');
            $mobiles = implode(",",$arr);
            
            $data = array(
            'authkey' => $authkey,
            'mobiles' => $mobiles,
            'message' => $encodeMessage,
            'sender' => $senderId,
            'route' => $route,
            
            );
            
            $url = "htpps://....";
            $ch = curl_init();
            curl_setopt_array($ch, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => $postData
            
            ));
            
            
            //ignore ssl certification verification proces
            
            curl_setopt($ch, CURL_SSL_VERIFYHOST, 0);
            curl_setopt($ch, CURL_SSL_VERIFYPEER, 0);
            
            // Get Response
            
            $output = curl_exec($ch);
            
            // Print error if any
            
            if(curl_errno($ch)){
            echo 'error :' . curl_error($ch);
            }
            curl_close($ch);
            return redirect ('/sms')->with('success', 'Message Sent');
            
    }

    
    
}
