<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EmployeeAcceptanceMail extends Mailable
{
    use Queueable, SerializesModels;

    public $first_name;

    public function __construct($first_name)
    {
        $this->first_name = $first_name;
    }

    public function build()
    {
        return $this->view('email-views.user-acceptance')
                    ->subject('Welcome to Civil Registry - Account Approved');
    }
} 