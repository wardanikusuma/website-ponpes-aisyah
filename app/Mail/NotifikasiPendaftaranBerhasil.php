<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class NotifikasiPendaftaranBerhasil extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $pendaftaran;
    public $noPendaftaran;

    /**
     * Create a new message instance.
     */
    public function __construct($pendaftaran, $noPendaftaran)
    {
        $this->pendaftaran = $pendaftaran;
        $this->noPendaftaran = $noPendaftaran;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Pendaftaran PPDB Aisyah Berhasil - ' . $this->noPendaftaran,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'emails.pendaftaran_berhasil',
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
