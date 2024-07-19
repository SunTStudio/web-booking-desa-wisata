<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Bulanan</title>
    <!-- <link rel="stylesheet" href="/css/laporan.css"> -->
    <style>
        .laporan {
            margin: 2rem;
        }

        .laporan .navbar {
            width: 100%;
            margin-bottom: 3rem;
        }

        .laporan .detail {
            width: 100%;
            /* Mengatur tabel agar mengisi 100% lebar kontainer */
            border-collapse: collapse;
        }

        .laporan .detail th,
        .laporan .detail td {
            border: 1px solid #dddddd;
            /* Garis batas sel */
            text-align: left;
            /* Penyusunan teks */
            padding: 8px;
            /* Ruang isi dalam sel */
            height: 1rem;
        }

        a {
            padding: 0.8rem 1.5rem;
            border-radius: 0.3rem;
            background-color: green;
            color: white;
            margin-top: 3rem;
        }
    </style>
</head>

<body>
    <section class="laporan">
        <center>
            <a href="{{ route('admin.laporan.pdf', ['bulan' => request('bulan'), 'tahun' => request('tahun')]) }}" target="_blank">cetak</a>
        </center>
        <table class="navbar">
            <tr>
                <td>
                    <img src="/asset/Logo_Desa_Krebet.png" alt="Logo Desa Krebet" style="width: 70%; max-width: 250px">
                </td>
                <td>
                    <h2 style="text-align: right;">
                        @if(request('bulan') && request('tahun'))
                        Laporan Bulan {{ \Carbon\Carbon::create(request('tahun'), request('bulan'), 1)->translatedFormat('F Y') }}
                        @else
                        Laporan Keseluruhan
                        @endif
                    </h2>
                </td>
            </tr>
        </table>

        <table class="detail">
            <thead>
                <th>No</th>
                <th>Nama PIC</th>
                <th>No Telpon</th>
                <th>Nama Organisasi</th>
                <th>Jumlah Visitor</th>
                <th>Tanggal</th>
                <th>Jam Mulai</th>
                <th>Jam Selesai</th>
                <th>Guide</th>
                <th>Tagihan</th>
            </thead>
            <tbody>
                @foreach ($laporans as $laporan )
                <tr>
                    <th>{{ $loop->iteration }}</th>
                    <td>{{ $laporan->nama_pic }}</td>
                    <td>{{ $laporan->noTelpPIC }}</td>
                    <td>{{ $laporan->organisasi }}</td>
                    <td>{{ $laporan->visitor }}</td>
                    <td>{{ \Carbon\Carbon::parse($laporan->tanggal)->translatedFormat('d F Y') }}</td>
                    <td>{{ $laporan->jam_mulai }}</td>
                    <td>{{ $laporan->jam_selesai }}</td>
                    <th>{{ $laporan->guide->name }}</th>
                    <th>Rp {{ number_format($laporan->tagihan, 0, ',', '.') }}</th>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="9" style="text-align: center;">Total Pendapatan</td>
                    <td>Rp {{ number_format($totalPendapatan, 0, ',', '.') }}</td>
                </tr>
            </tfoot>
        </table>
    </section>
</body>

</html>