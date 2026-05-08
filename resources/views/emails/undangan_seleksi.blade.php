@component('mail::message')
# Undangan Seleksi {{ $stage == 'administrasi' ? 'Administrasi' : ($stage == 'akademik' ? 'Akademik' : ($stage == 'wawancara' ? 'Wawancara' : 'Baca Al-Quran')) }}

Halo **{{ $seleksi->pendaftaran->nama_lengkap }}**,

Terima kasih telah melakukan pendaftaran di Ponpes Aisyah. Berdasarkan hasil seleksi administrasi, kami mengundang Anda untuk mengikuti tahapan seleksi **{{ $stage == 'administrasi' ? 'Administrasi' : ($stage == 'akademik' ? 'Akademik' : ($stage == 'wawancara' ? 'Wawancara' : 'Baca Al-Quran')) }}** yang akan dilaksanakan pada:

@component('mail::panel')
**Jadwal:** {{ \Carbon\Carbon::parse($seleksi->{'jadwal_'.$stage})->translatedFormat('l, d F Y') }}
**Waktu:** {{ \Carbon\Carbon::parse($seleksi->{'jadwal_'.$stage})->format('H:i') }} WIB
@endcomponent

@if($stage == 'akademik' && $seleksi->link_gform)
Silakan akses tautan lembar ujian (Google Form) berikut pada waktu yang telah ditentukan:
[Link Ujian (Google Form)]({{ $seleksi->link_gform }})
@endif

@if($seleksi->{'link_gmeet_'.$stage})
Untuk koordinasi dan monitoring selama seleksi, silakan bergabung ke Google Meet berikut:
[Link Google Meet]({{ $seleksi->{'link_gmeet_'.$stage} }})
@endif

Mohon hadir tepat waktu dan mempersiapkan diri dengan baik.

Terima kasih,<br>
Panitia PPDB Ponpes Aisyah
@endcomponent
