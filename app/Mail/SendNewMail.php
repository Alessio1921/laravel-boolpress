<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendNewMail extends Mailable
{
    use Queueable, SerializesModels;
    protected $fullName;
    protected $guestMessage;
    protected $email;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($fullName, $guestMessage, $email)
    {
        $this->fullName=$fullName;
        $this->guestMessage=$guestMessage;
        $this->email=$email;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('guest.mail',["fullName" => $this->fullName, "guestMessage" => $this->guestMessage, "email" => $this->email]);
    }
}
