<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AdminRegistrationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $firstName;

    public function __construct($firstName)
    {
        $this->firstName = $firstName;
    }

    public function build()
    {
        return $this->subject('Welcome to Civil Registry Admin Portal')
                    ->view('emails.admin-registration')
                    ->with([
                        'firstName' => $this->firstName,
                    ]);
    }
} 