<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;


class SendEmail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $sub;
    public $msg;
    public function __construct($subject,$message)
    {
        //
        $this->sub = 'Notification From Jail Appeal';
        $this->msg = $message;
         
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $e_sub = $this->sub;
        $e_msg = $this->msg;

        return $this->view('/sendmail',compact("e_msg"))->subject($e_sub);
    }
}
