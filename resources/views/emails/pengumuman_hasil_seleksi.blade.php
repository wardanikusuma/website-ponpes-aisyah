# Pengumuman Hasil Seleksi PPDB

Halo **{{ $seleksi->pendaftaran->nama_lengkap }}**,

Terima kasih telah mengikuti seluruh rangkaian tahapan seleksi PPDB di Ponpes Aisyah untuk jenjang {{ $seleksi->jenjang }}.

Berdasarkan hasil penilaian seluruh tahapan seleksi yang telah dilakukan, dengan ini kami sampaikan bahwa Anda dinyatakan:

<x-mail::panel>
# {{ strtoupper($seleksi->status_final ?? ($seleksi->status_kelulusan ? 'Lulus' : 'Tidak Lulus')) }}
</x-mail::panel>

Anda dapat melihat detail hasil seleksi dan informasi pendaftaran ulang melalui tombol di bawah ini:

<x-mail::button :url="config('app.url') . '/pengumuman/' . strtolower($seleksi->jenjang)">
Lihat Hasil Detail
</x-mail::button>

Terima kasih atas partisipasi Anda.

Salam,<br>
Panitia PPDB Ponpes Aisyah
