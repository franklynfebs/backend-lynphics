<?php

namespace App\Mail;

use App\Models\ConsultationRequest;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;


class ConsultationSubmitted extends Mailable
{
    use Queueable, SerializesModels;

    public ConsultationRequest $consultation;

    /**
     * Create a new message instance.
     */
    public function __construct(ConsultationRequest $consultation)
    {
        $this->consultation = $consultation;
    }

    /**
     * Email subject.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Your LYNPHICS Consultation Request Has Been Received',
        );
    }

    /**
     * Email content.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.consultation-submitted',
        );
    }

    /**
     * Attachments.
     */
    public function attachments(): array
    {
        return [];
    }
}