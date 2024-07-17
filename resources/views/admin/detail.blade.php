<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail | Booking</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <!-- montserrat -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <!-- montserrat -->
    <style>
        * {
            font-family: 'montserrat', sans-serif;

        }

        #booking-text p {
            font-size: 0.85rem;
        }
    </style>
</head>

<body style="background-color:rgb(243, 244, 246);">

    <section id="nav">
        <nav class="navbar navbar-expand-lg bg-white">
            <div class="container-fluid">
                <img src="\img\desa-krebet.png" alt="" class="img-fluid navbar-brand ps-4" id="logo">
                <div>
                    <ul class="navbar-nav d-flex  text-center mb-2 mb-lg-0">
                        <li class="nav-item d-flex me-4">
                            <a class="nav-link active fw-bold text-secondary me-3" aria-current="page" href="{{ route('admin.booking') }}"><i class="bi bi-exclude"></i> Kembali</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>

    <section id="detail">
        <div class="container">
            <div class="row justify-content-center bg-white rounded mt-5 p-4 shadow pb-3 ps-2">
                <p class="h5">Detail Booking</p>
                <hr>
                <div class="col">
                    <div class="row mt-2 " id="booking-text">
                        <div class="col-4 border-end p-3 ps-4">
                            <p class="fw-bold"><small>ID BOOKING : 00{{ $detail->id }}</small></p>
                            <p>Nama PIC : <span class="fw-bold">{{ $detail->nama_pic }}</span></p>
                            <p>Organisati : <span class="fw-bold">{{ $detail->organisasi }}</span></p>
                            <p>No Telp PIC : <span class="fw-bold">{{ $detail->noTelpPIC }}</span></p>
                            <p>Jumlah Visitor : <span class="fw-bold">{{ $detail->visitor }} Orang</span></p>
                            <p>Tanggal Booking : <span class="fw-bold">{{ $detail->tanggal }}</span></p>
                            <p>Jam Mulai : <span class="fw-bold">{{ $detail->jam_mulai }}</span></p>
                            <p>Jam Selesai : <span class="fw-bold">{{ $detail->jam_selesai }}</span></p>
                            <p>Penanggung Jawab : <span class="fw-bold">{{ $detail->guide->name }}</span></p>
                            <p>Status Booking : <span class="fw-bold btn btn-info text-white">{{ $detail->status }}</span></p>
                            <a href="{{ route('admin.invoice', ['id' => $detail->id]) }}" class="btn btn-primary fw-bold " style="font-size: 0.8rem ;">Cetak Struck</a>
                            <a href="{{ route('admin.invoice.send', ['id' => $detail->id]) }}" class="btn btn-warning fw-bold" style="font-size: 0.8rem ;">Kirim Struck ke PIC</a>

                        </div>
                        <div class="col-8 p-3 ps-5">
                            <p class="fw-bold"><small>ID PAKET : 00{{ $detail->paket_id }}</small></p>

                            <!-- Paket Batik -->
                            <div class="batik justify-content-between d-flex pt-1">
                                <p>Paket Batik : <span class="fw-bold">{{ $detail->paket->batik->nama }}</span> </p>
                                <p>Rp {{ $detail->paket->batik->harga }} X {{ $detail->visitor }} org = Rp {{ number_format($detail->paket->batik->harga * $detail->visitor, 0, ',', '.') }},-</p>
                            </div>

                            <!-- Paket Kesenian -->
                            <div class="kesenian justify-content-between d-flex  pt-1">
                                <p>Paket Kesenian : <span class="fw-bold">{{ $detail->paket->kesenian->nama }} ({{ $detail->paket->ketKesenian }})</span></p>
                                <p>Rp {{ $tagihanKesenian }} X {{ $detail->visitor }} org = Rp {{ number_format($tagihanKesenian * $detail->visitor, 0, ',', '.') }},-</p>
                            </div>

                            <!-- Paket Cocok Tanam -->
                            <div class="cocok-tanam justify-content-between d-flex  pt-1">
                                <p>Paket Cocok Tanam : <span class="fw-bold">{{ $detail->paket->cocokTanam->nama }}</span></p>
                                <p>Rp {{ $detail->paket->cocokTanam->harga }} X {{ $detail->visitor }} org = Rp {{ number_format($detail->paket->cocokTanam->harga * $detail->visitor, 0, ',', '.') }},-</p>
                            </div>

                            <!-- Paket Permainan -->
                            <div class="permainan justify-content-between d-flex  pt-1">
                                <p>Paket Permainan : <span class="fw-bold">{{ $detail->paket->permainan->nama }}</span></p>
                                <p>Rp {{ $detail->paket->permainan->harga }} X {{ $detail->visitor }} org = Rp {{ number_format($detail->paket->permainan->harga * $detail->visitor, 0, ',', '.') }},-</p>
                            </div>

                            <!-- Paket Kuliner -->
                            <div class="kuliner justify-content-between d-flex  pt-1">
                                <p>Paket Kuliner : <span class="fw-bold">{{ $detail->paket->kuliner->nama }}</span></p>
                                <p>Rp {{ $detail->paket->kuliner->harga }} X {{ $detail->visitor }} org = Rp {{ number_format($detail->paket->kuliner->harga * $detail->visitor, 0, ',', '.') }},-</p>
                            </div>

                            <!-- Paket Homestay -->
                            <div class="homestay justify-content-between d-flex  pt-1">
                                <p>Paket Homestay : <span class="fw-bold">{{ $detail->paket->homestay->nama }}</span></p>
                                <p>Rp {{ number_format($detail->paket->homestay->harga, 0, ',', '.') }}</p>
                            </div>

                            <!-- Paket Studi Banding -->
                            <div class="studi-banding justify-content-between d-flex border-bottom pt-1">
                                <p>Paket Studi Banding : <span class="fw-bold">{{ $detail->paket->study_banding->nama }}</span></p>
                                <p>Rp {{ number_format($detail->paket->study_banding->harga, 0, ',', '.') }}</p>
                            </div>
                            <div class="studi-banding justify-content-between d-flex pt-3">
                                <p class="fw-bold">Total Tagihan</p>
                                <p class="fw-bold">Rp {{ number_format($detail->tagihan, 0, ',', '.') }},-</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>