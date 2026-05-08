<x-mail::message>
# Pendaftaran Berhasil!

Assalamu'alaikum Warahmatullahi Wabarakatuh, **{{ $pendaftaran->nama_lengkap }}**.

Terima kasih telah mendaftar di **Pondok Pesantren Aisyah Samawa**. Pendaftaran Anda untuk jenjang **{{ $pendaftaran->jenjang ?? 'PAUD' }}** telah kami terima dengan detail sebagai berikut:

- **Nomor Pendaftaran:** {{ $noPendaftaran }}
- **Nama Lengkap:** {{ $pendaftaran->nama_lengkap }}
- **Tanggal Daftar:** {{ date('d F Y') }}

<x-mail::panel>
Mohon menunggu informasi selanjutnya mengenai tahapan seleksi yang akan dikirimkan melalui email atau WhatsApp resmi kami.
</x-mail::panel>

Silakan simpan nomor pendaftaran Anda untuk keperluan verifikasi di masa mendatang.

Terima kasih,<br>
Panitia PPDB {{ config('app.name') }}
</x-mail::message>
