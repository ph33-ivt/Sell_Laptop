<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Contact extends Mailable
{
    use Queueable, SerializesModels;
    public $name,$email,$telephone,$subject,$commnet;
    // ,$telephone,$subject,$message;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name,$email,$telephone,$subject,$commnet)
    {
        $this->name  = $name;
        $this->email  = $email;
        $this->telephone  = $telephone;
        $this->subject  =  $subject;
        $this->commnet  = $commnet;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.contact');
    }
}
