<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notifications\jappNotification;
use App\User;
use App\Notification;
use Carboon\Carbon;
class notifyController extends Controller
{
    public function notifyme(){

        $user = User::find(1);

                foreach ($user->notifications as $notification) {
                   $test1= $notification->data['data'];
                }
                User::find(1)->notify(new jappNotification);
               
                $send['user'] = $user;
                $send['test1'] = $test1;
               
               return view ('/notify',$send);
    }
}
