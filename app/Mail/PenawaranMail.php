<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class PenawaranMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    private mixed $emailData;

    public function __construct($emailData)
    {
        $this->emailData = $emailData;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Penawaran',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.penawaran',
        );
    }

    public function attachments(): array
    {
        return [
            Attachment::fromStorage($this->emailData['file'])
                ->as($this->emailData['file_name'])
                ->withMime('application/pdf'),

        ];
    }
}
