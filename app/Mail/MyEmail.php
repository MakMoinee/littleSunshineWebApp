<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class MyEmail extends Mailable
{
    use Queueable, SerializesModels;


    public $subject;
    public $username;
    public $password;

    public function __construct($subject, $username, $password)
    {
        $this->subject = $subject;
        $this->username = $username;
        $this->password = $password;
    }

    public function build()
    {
        return $this->from(env('MAIL_FROM_ADDRESS'))
            ->subject($this->subject)
            ->view('emails.template')
            ->with([
                'username' => $this->username,
                'password' => $this->password
            ]);
    }
}
