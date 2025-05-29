<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EmployeeRejectionMail extends Mailable
{
    use Queueable, SerializesModels;

    public $first_name;
    public $reason;

    public function __construct($first_name, $reason = null)
    {
        $this->first_name = $first_name;
        $this->reason = $reason;
    }

    public function build()
    {
        return $this->view('email-views.user-rejection')
                    ->subject('Account Application Update - Civil Registry');
    }
} 