<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notifications\jappNotification;
use App\User;
use App\Notification;
use Carboon\Carbon;
Use DB;
class notifyController extends Controller
{
    public function notifyme(){

     
            
            $user = User::find(1);

            foreach ($user->notifications as $notification) {
               $test1= $notification->data['data'];
            }
            
            User::find(1)->notify(new jappNotification);
           
            $send['user'] = $user;
           // $send['test1'] = $test1;
           
           return view ('/notify',$send);
        
        
    }
    public function readnotify(){
       
        Auth()->user()->unreadNotifications->markAsRead();
       // $send['user'] = $user;
        return redirect()->back();
    }
    public function deletenotify(Request $request){
       
       // $send['user'] = $user;
       $case_id = $request->case_no;
        //Test case for update from notification
            $notification_Records = DB::table('all_appeals')->where('case_no','=',@$case_id)->get();
            @$split = $notification_Records[0]->case_no;
            
            echo $split;
            Auth()->user()->unreadNotifications->first()->markAsRead();

        return redirect()->back();
    }
}
