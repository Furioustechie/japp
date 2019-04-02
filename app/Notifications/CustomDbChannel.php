<?php

namespace App\Notifications;

use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Notifiable;
use App\Newappeal;
use App\User;

class CustomDbChannel 
{

  public function send($notifiable, Notification $notification)
  {
    $data = $notification->toDatabase($notifiable);
    //$appl = $notification->toDatabase($notifiable);

    return $notifiable->routeNotificationFor('database')->create([
        'id' => $notification->id,

        //customize here
        //'sender_id' => $data['sender_id'], //<-- comes from toDatabase() Method below

        'user_id'=> \Auth::user()->id,

        'type' => get_class($notification),
        'data' => $data,
        'appeal_id' =>$data['appeal_id'],
        'read_at' => null,
    ]);
  }

}
