<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class DeclinedAppointmentMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct($appointmentType, $documentType, $appointmentDate, $appointmentTime, $first_name)
    {
        $this->appointmentType = $appointmentType;
        $this->documentType = $documentType;
        $this->appointmentDate = $appointmentDate;
        $this->appointmentTime = $appointmentTime;
        $this->first_name = $first_name;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Declined Appointment Mail',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'email-views.declined-appointment',
            with: [
                'appointmentType' => $this->appointmentType,
                'documentType' => $this->documentType,
                'appointmentDate' => $this->appointmentDate,
                'appointmentTime' => $this->appointmentTime,
                'first_name' => $this->first_name,
            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
