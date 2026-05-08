<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class NotifikasiLolosTahap extends Mailable
{
    use Queueable, SerializesModels;

    public $seleksi;
    public $stage;

    public function __construct($seleksi, $stage)
    {
        $this->seleksi = $seleksi;
        $this->stage = $stage;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        $stageName = [
            'administrasi' => 'Administrasi',
            'akademik' => 'Akademik',
            'wawancara' => 'Wawancara',
            'alquran' => 'Baca Al-Quran'
        ][$this->stage] ?? 'Seleksi';

        return new Envelope(
            subject: 'Selamat! Anda Lolos Seleksi ' . $stageName . ' PPDB Ponpes Aisyah',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'emails.notifikasi_lolos_tahap',
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
