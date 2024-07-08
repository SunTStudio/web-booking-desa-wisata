<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Invoice</title>
    <!-- <link rel="stylesheet" href="/css/invoice.css"> -->
    <style>
        /* .invoice {
            margin: 4rem 5rem;
        } */

        .invoice .navbar {
            width: 100%;
            /* display: flex;
            justify-content: space-between; */
        }

        .invoice .informasi {
            width: 100%;
            /* display: flex;
            justify-content: space-between; */
        }

        .invoice .informasi .booker {
            text-align: right;
        }

        .invoice .detail {
            width: 100%;
            /* Mengatur tabel agar mengisi 100% lebar kontainer */
            border-collapse: collapse;
            /* Menggabungkan border sel */
        }

        .invoice .detail th,
        .invoice .detail td {
            border: 1px solid #dddddd;
            /* Garis batas sel */
            text-align: left;
            /* Penyusunan teks */
            padding: 4px;
            /* Ruang isi dalam sel */
            height: 0.5rem;
        }

        .invoice .footer {
            width: 100%;

            /* display: flex;
            justify-content: space-between; */
        }
        
        .invoice .footer .tanda-tangan {
            width: 20rem;
        }
    </style>
</head>

<body>
	
    <section class="invoice">
        <table class="navbar">
            <tr>
                <td>
                    <img src="{{ public_path("asset/Logo_Desa_Krebet.png") }}" alt="Logo Desa Krebet" style="width: 70%; max-width: 250px">
                </td>
                <td>
                    <h1 style="text-align: right;">Invoice</h1>
                </td>
            </tr>
        </table>

        <table class="informasi">
            <tr>
                <td class="lokasi">
                    <p>DESA WISATA KREBET</p>
                    <p>Krebet, Sendangsari, Pajangan, Bantul, Yogyakarta</p>
                    <p>Email : pdwkrebet@gmail.com</p>
                </td>
                <td class="booker">
                    <p>Yogyakarta,  {{ \Carbon\Carbon::parse($data->tanggal)->translatedFormat('d F Y') }}</p>
                    <p>Kepada Yth. {{ $data->nama_pic }}</p>
                </td>
            </tr>
        </table>
        <table class="detail">
            <thead>
                <tr>
                    <td>No</td>
                    <td>Nama Barang</td>
                    <td>Banyaknya</td>
                    <td>Harga Satuan</td>
                    <td>Sub Total</td>
                </tr>
            </thead>
            <tbody>
                @php
                $no = 1;
                @endphp
                @if ($data->paket->batik->nama != "Tidak Pesan")
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $data->paket->batik->nama }}</td>
                    <td>{{ $data->visitor }}</td>
                    <td>Rp. {{ number_format($data->paket->batik->harga, 0, ',', '.') }}</td>
                    <td>Rp. {{ number_format($data->paket->batik->harga * $data->visitor, 0, ',', '.') }}</td>
                </tr>
                @endif
                @if ($data->paket->kesenian->nama != "Tidak Pesan")
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $data->paket->kesenian->nama }}</td>
                    <td>{{ $data->visitor }}</td>
                    <td>Rp. {{ number_format($tagihanKesenian, 0, ',', '.') }}</td>
                    <td>Rp. {{ number_format($tagihanKesenian * $data->visitor, 0, ',', '.') }}</td>
                </tr>
                @endif
                @if ($data->paket->cocokTanam->nama != "Tidak Pesan")
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $data->paket->cocokTanam->nama }}</td>
                    <td>{{ $data->visitor }}</td>
                    <td>Rp. {{ number_format($data->paket->cocokTanam->harga, 0, ',', '.') }}</td>
                    <td>Rp. {{ number_format($data->paket->cocokTanam->harga * $data->visitor, 0, ',', '.') }}</td>
                </tr>
                @endif
                @if ($data->paket->permainan->nama != "Tidak Pesan")
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $data->paket->permainan->nama }}</td>
                    <td>{{ $data->visitor }}</td>
                    <td>Rp. {{ number_format($data->paket->permainan->harga, 0, ',', '.') }}</td>
                    <td>Rp. {{ number_format($data->paket->permainan->harga * $data->visitor, 0, ',', '.') }}</td>
                </tr>
                @endif
                @if ($data->paket->kuliner->nama != "Tidak Pesan")
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $data->paket->kuliner->nama }}</td>
                    <td>{{ $data->visitor }}</td>
                    <td>Rp. {{ number_format($data->paket->kuliner->harga, 0, ',', '.') }}</td>
                    <td>Rp. {{ number_format($data->paket->kuliner->harga * $data->visitor, 0, ',', '.') }}</td>
                </tr>
                @endif
                @if ($data->paket->homestay->nama != "Tidak Pesan")
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $data->paket->homestay->nama }}</td>
                    <td>{{ $data->visitor }}</td>
                    <td>Rp. {{ number_format($data->paket->homestay->harga, 0, ',', '.') }}</td>
                    <td>Rp. {{ number_format($data->paket->homestay->harga * $data->visitor, 0, ',', '.') }}</td>
                </tr>
                @endif
                @if ($data->paket->study_banding->nama != "Tidak Pesan")
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $data->paket->study_banding->nama }}</td>
                    <td>{{ $data->visitor }}</td>
                    <td>Rp. {{ number_format($data->paket->study_banding->harga, 0, ',', '.') }}</td>
                    <td>Rp. {{ number_format($data->paket->study_banding->harga * $data->visitor, 0, ',', '.') }}</td>
                </tr>
                @endif

                <tr>
                    <td colspan="4" style="text-align: center;">TOTAL</td>
                    <td>Rp. {{ number_format($data->tagihan, 0, ',', '.') }}</td>
                </tr>
                <tr>
                    <td colspan="4" style="text-align: center;">DP</td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="4" style="text-align: center;">SISA</td>
                    <td>Rp. {{ number_format($data->tagihan, 0, ',', '.') }}</td>
                </tr>
            </tbody>
        </table>
        <table class="footer">
            <tr>
                <td style="vertical-align: top">
                    <p>24 - 25 JUNI 2024</p>
                </td>
                <td class="tanda-tangan">
                        <p style="text-align: center;">Hormat Kami,</p>
                        <p style="padding: 2rem;"></p>
                        <p style="text-align: center;">AGUSJATI KUMARA</p>
                </td>
            </tr>
        </table>
    </section>
</body>

</html>