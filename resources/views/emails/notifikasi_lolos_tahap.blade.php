@component('mail::message')
# Selamat! Anda Lolos Seleksi {{ $stage == 'administrasi' ? 'Administrasi' : ($stage == 'akademik' ? 'Akademik' : ($stage == 'wawancara' ? 'Wawancara' : 'Baca Al-Quran')) }}

Halo **{{ $seleksi->pendaftaran->nama_lengkap }}**,

Kami menginformasikan bahwa berdasarkan hasil penilaian, Anda dinyatakan **LOLOS** pada tahap seleksi **{{ $stage == 'administrasi' ? 'Administrasi' : ($stage == 'akademik' ? 'Akademik' : ($stage == 'wawancara' ? 'Wawancara' : 'Baca Al-Quran')) }}**.

@component('mail::panel')
Status: **LOLOS TAHAP {{ strtoupper($stage) }}**
@endcomponent

Silakan pantau terus dashboard pendaftaran atau halaman pengumuman di website kami untuk jadwal tahapan selanjutnya.

@component('mail::button', ['url' => config('app.url') . '/pengumuman/' . strtolower($seleksi->jenjang)])
Lihat Pengumuman di Web
@endcomponent

Terima kasih atas partisipasi Anda. Persiapkan diri Anda untuk tahapan berikutnya!

Salam,<br>
Panitia PPDB Ponpes Aisyah
@endcomponent
