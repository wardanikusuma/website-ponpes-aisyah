<!DOCTYPE html>
<html>
<head>
    <title>Laporan Pendaftaran PPDB</title>
    <style>
        body { font-family: sans-serif; font-size: 10pt; }
        .header { text-align: center; margin-bottom: 20px; border-bottom: 2px solid #000; padding-bottom: 10px; }
        .header h1 { margin: 0; font-size: 18pt; }
        .header p { margin: 5px 0; }
        table { width: 100%; border-collapse: collapse; margin-top: 10px; }
        th, td { border: 1px solid #000; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
        .footer { margin-top: 30px; text-align: right; }
        .page-number:after { content: counter(page); }
    </style>
</head>
<body>
    <div class="header">
        <h1>PONDOK PESANTREN AISYAH SAMAWA</h1>
        <p>Laporan Pendaftaran Calon Santri Baru TA 2026/2027</p>
        <p>Jenjang: {{ $jenjang }}</p>
    </div>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Lengkap</th>
                <th>Jenjang</th>
                <th>NISN/NIK</th>
                <th>Sekolah Asal</th>
                <th>No. HP Orang Tua</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $index => $item)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $item->nama_lengkap }}</td>
                <td>{{ $item->kategori }}</td>
                <td>{{ $item->nisn ?? $item->nik }}</td>
                <td>{{ $item->nama_sekolah_asal ?? '-' }}</td>
                <td>{{ $item->no_hp_ayah ?? $item->no_hp_ibu ?? '-' }}</td>
                <td>{{ $item->alamat }}, {{ $item->kelurahan }}, {{ $item->kecamatan }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="footer">
        <p>Dicetak pada: {{ $tanggal }}</p>
    </div>
</body>
</html>
