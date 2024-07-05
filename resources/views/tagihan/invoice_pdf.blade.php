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
                <tr>
                    <td>1</td>
                    <td>PAKET LIVE IN 2D1N</td>
                    <td>88</td>
                    <td>285.000</td>
                    <td>25.080.000</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>PAKET GURU (MEMBATIK MAKAN DAN HOMESTAY)</td>
                    <td>6</td>
                    <td>165.000</td>
                    <td>990.000</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>6</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>7</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="4" style="text-align: center;">TOTAL</td>
                    <td>26.070.000</td>
                </tr>
                <tr>
                    <td colspan="4" style="text-align: center;">DP</td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="4" style="text-align: center;">SISA</td>
                    <td>26.070.000</td>
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