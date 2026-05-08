<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class PengumumanHasilSeleksi extends Mailable
{
    use Queueable, SerializesModels;

    public $seleksi;

    public function __construct($seleksi)
    {
        $this->seleksi = $seleksi;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Pengumuman Hasil Seleksi PPDB Ponpes Aisyah',
        );
    }

    public function content(): Content
    {
        return new Content(
            markdown: 'emails.pengumuman_hasil_seleksi',
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
