<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class RollEmail extends Mailable
{
    use Queueable, SerializesModels;


    public $subject;
    public $studentName;
    public $course;
    public $guardianName;
    public $contactNumber;
    public $address;
    public $evaluation;
    public $guardianEmail;

    public function __construct($subject, $studentName, $course, $guardianName, $contactNumber, $guardianEmail, $address, $evaluation)
    {
        $this->subject = $subject;
        $this->studentName = $studentName;
        $this->course = $course;
        $this->guardianName = $guardianName;
        $this->contactNumber = $contactNumber;
        $this->guardianEmail = $guardianEmail;
        $this->address = $address;
        $this->evaluation = $evaluation;
    }

    public function build()
    {
        return $this->from(env('MAIL_FROM_ADDRESS'))
            ->subject($this->subject . ": " . $this->studentName)
            ->view('emails.roll')
            ->with([
                "subject" => $this->subject,
                "studentName" =>  $this->studentName,
                "course" =>  $this->course,
                "guardianName" =>  $this->guardianName,
                "contactNumber" =>  $this->contactNumber,
                "guardianEmail" =>  $this->guardianEmail,
                "address" =>  $this->address,
                "evaluation" =>  $this->evaluation,
            ]);
    }
}
