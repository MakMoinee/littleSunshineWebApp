<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class RejectEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $subject;
    public $notes;

    public function __construct($subject, $notes)
    {
        $this->subject = $subject;
        $this->notes = $notes;
    }

    public function build()
    {
        return $this->from(env('MAIL_FROM_ADDRESS'))
            ->subject($this->subject)
            ->view('emails.reject')
            ->with([
                'notes' => $this->notes,
            ]);
    }
}
