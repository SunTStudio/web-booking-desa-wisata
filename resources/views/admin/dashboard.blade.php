@extends('admin.layout')

@section('title', 'Dashboard | Admin')

@section('titleNav', 'Dashboard')

@section('css')

<link rel="stylesheet" href="/css/dashboard.css">
@endsection

@section('menu')
<p class="btn btn-secondary text-light d-flex justify-content-between align-items-center me-3 "><a href="{{ route('admin.dashboard') }}" class=" text-light fw-bold m-1 ms-3"><i class="bi bi-view-list me-2  ps-1 pe-1 rounded"></i> Dashboard </a></p>
<p class="d-flex justify-content-between align-items-center me-3 "><a href="{{ route('admin.kalender') }}" class="text-secondary m-1 ms-3 fw-bold"><i class=" me-2 bi bi-person-fill-up  ps-1 pe-1 rounded"></i> Kalender </a></p>
<p class="d-flex justify-content-between align-items-center me-3 "><a href="{{ route('admin.booking') }}" class="text-secondary m-1 ms-3 fw-bold"><i class=" me-2 bi bi-key ps-1 pe-1 rounded"></i> Booking </a> </p>
<p class="d-flex justify-content-between align-items-center me-3 "><a href="{{ route('admin.laporan') }}" class="text-secondary m-1 ms-3 fw-bold"><i class=" me-2 bi bi-journal ps-1 pe-1 rounded"></i> Laporan </a> </p>
@endsection

@section('content')
<div class="row justify-content-center mt-3">
    <div class="col-lg-5 col-12 informasi d-flex">
        <div class="row justify-content-between m-3 bg-white rounded p-4" id="menuCount">
            <div class="col-4 mt-2 mb-2">
                <div class="box-info p-2 text-center text-white bg-info rounded shadow">
                    <p class="m-1 icon-menu"><i class="fa-solid fa-calendar-day"></i></p>
                    <p class="m-0 total-menu fw-bold">{{ $kunjunganHarian }}</p>
                    <p class="m-0 fw-bold keterangan-menu">Kunjungan<br>Hari ini</p>
                </div>
            </div>
            <div class="col-4 mt-2 mb-2">
                <div class="box-info p-2 text-white text-center bg-success rounded shadow">
                    <p class="m-1 icon-menu"><i class="fa-solid fa-calendar-days"></i></p>
                    <p class="m-0 total-menu fw-bold">{{ $kunjunganBulanan }}</p>
                    <p class="m-0 fw-bold keterangan-menu">Kunjungan<br>Bulan ini</p>
                </div>
            </div>
            <div class="col-4 mt-2 mb-2">
                <div class="box-info p-2 text-white text-center bg-secondary rounded shadow">
                    <p class="m-1 icon-menu"><i class="fa-solid fa-people-line"></i></p>
                    <p class="m-0 total-menu fw-bold">{{ $totalKunjungan }}</p>
                    <p class="m-0 fw-bold keterangan-menu">Total<br>Kunjungan</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center m-3 bg-white rounded px-3 py-4">
            <div class="col text-center">
                <a href="" class="btn btn-primary fw-bold p-3"><span><i class="fa-regular fa-square-plus fs-1 p-2"></i></span><br>Buat Booking</a>
            </div>
            <div class="col text-center">
                <a href="{{ route('admin.laporan') }}" class="btn btn-danger fw-bold p-3 "><span><i class="fa-solid fa-print fs-1 p-2"></i></span><br>Cetak Laporan</a>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-12" id="appointment">
        <div class="row justify-content-center m-3 bg-white rounded p-4 pt-2">
            <p class=" m-0 fw-bold text-center text-secondary p-2">Kunjungan Terdekat</p>
            @foreach ($appoitments as $appoitment )
                
            <div class="col-5 bg-primary me-4 p-3 rounded">
                <div class="waktu-appointment text-white fw-medium">
                    <p class="m-0 pb-2"><strong>Tanggal : </strong><br> {{ $appoitment->tanggal }} </p>
                    <p class="m-0"><strong>Waktu : </strong><br> {{ $appoitment->jam_mulai }} - {{ $appoitment->jam_selesai }}</p>
                </div>
                <hr>
                <div class="appointment-info text-white">
                    <p class="mt-2"><span><strong>Nama PIC : </strong></span> {{ $appoitment->nama_pic }}</p>
                    <p class="mt-1"><span><strong>Organisasi : </strong></span> {{ $appoitment->organisasi }}</p>
                    <p class="mt-1"><span><strong>Jumlah Orang : </strong></span> {{ $appoitment->visitor }} Orang</p>
                    <p class="mt-1"><span><strong>No Telepon : </strong></span> {{ $appoitment->noTelpPIC }} </p>
                </div>
            </div>
            @endforeach
            
        </div>
    </div>
</div>

<div class="container-fluid  px-4">
        <div class="row justify-content-center m-4 mt-0 g-4">
            <div class="col-sm-12 col-xl-6">
                <div class="bg-white text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0 fw-bold">Grafik Kunjungan Desa Krebet</h6>
                    </div>
                    <canvas id="kunjungan-trafik"></canvas>
                </div>
            </div>
            <div class="col-sm-12 col-xl-6">
                <div class="bg-white text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0 fw-bold">Grafik Pendapatan Desa Krebet</h6>
                    </div>
                    <canvas id="pendapatan-trafik"></canvas>
                </div>
            </div>
        </div>
    </div>

<div class="row justify-content-center mt-3 mx-3 mb-5" id="tabel-booking">
    <div class="col-11 bg-white rounded p-3 text-center">
        <table class="table text-center ">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Nama PIC</th>
                    <th scope="col">Nama Organisasi</th>
                    <th scope="col">No Telpon</th>
                    <th scope="col">Jam Mulai</th>
                    <th scope="col">Jam Selesai</th>
                    <th scope="col">Jumlah Visitor</th>
                    <th scope="col">Opsi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $items)
                <tr>
                    <th scope="row" class="pt-3">{{ $loop->iteration }}</th>
                    <td class="pt-3">{{ \Carbon\Carbon::parse($items->tanggal)->translatedFormat('d F Y') }}</td>
                    <td class="pt-3">{{ $items->nama_pic }}</td>
                    <td class="pt-3">{{ $items->organisasi }}</td>
                    <td class="pt-3">085868144268</td>
                    <td class="pt-3">{{ $items->jam_mulai }}</td>
                    <td class="pt-3">{{ $items->jam_selesai }}</td>
                    <td class="pt-3">{{ $items->visitor }}</td>
                    <td><a href="#" class="btn btn-warning" style="font-size: 0.8rem ;">Edit</a> | <a href="#" class="btn btn-danger" style="font-size: 0.8rem ;">Delete</a> | <a href="{{ route('admin.invoice', ['id' => $items->id]) }}" class="btn btn-info" style="font-size: 0.8rem ;">Cetak</a></td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
        <a href="#" style="text-decoration: none;">Selengkapnya <i class="fa-solid fa-caret-right"></i></a>
    </div>
</div>
@endsection

@section('menuHp')
<div class="col text-center ">
    <a href="{{ route('admin.kalender') }}" class="text-secondary">
        <p><i class="fa-regular fa-calendar-days m-0 p-0 pt-2"></i></p>
        <p>Kalender</p>
    </a>
</div>
<div class="col text-center rounded-top bg-secondary">
    <a href="{{ route('admin.dashboard') }}" class="text-white">
        <p><i class="fa-solid fa-globe m-0 p-0 pt-2"></i></p>
        <p>Dashboard</p>
    </a>
</div>
<div class="col text-center">
    <a href="{{ route('admin.booking') }}" class="text-secondary">
        <p><i class="fa-solid fa-house-lock m-0 p-0 pt-2"></i></p>
        <p>Booking</p>
    </a>
</div>
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var ctx = document.getElementById('kunjungan-trafik').getContext('2d');
            var trafficChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: @json($dates),
                    datasets: [{
                        label: 'Kunjungan Harian',
                        data: @json($counts),
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 2,
                        fill: false,
                    }]
                },
                options: {
                    scales: {
                        x: {
                            title: {
                                display: true,
                                text: 'Tanggal'
                            }
                            },
                        y: {
                            beginAtZero: true,
                            title: {
                                display: true,
                                text: 'Jumlah Kunjungan'
                            }
                        }
                    }
                }
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var ctx = document.getElementById('pendapatan-trafik').getContext('2d');
            var revenueChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: @json($dates),
                    datasets: [{
                        label: 'Pendapatan Harian',
                        data: @json($totals),
                        backgroundColor: 'rgba(54, 162, 235, 0.6)',
                        borderColor: 'rgba(54, 162, 235, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        x: {
                            title: {
                                display: true,
                                text: 'Tanggal'
                            }
                        },
                        y: {
                            beginAtZero: true,
                            title: {
                                display: true,
                                text: 'Pendapatan (IDR)'
                            }
                        }
                    }
                }
            });
        });
    </script>
@endsection