@extends('admin.layout')

@section('title', 'Dashboard | Admin')

@section('titleNav', 'Dashboard')

@section('css')

    <link rel="stylesheet" href="/css/dashboard.css">
@endsection

@section('menu')
    <p class="btn btn-secondary text-light d-flex justify-content-between align-items-center me-3 "><a href="{{ route('admin.dashboard') }}" class=" text-light fw-bold m-1 ms-3"><i class="bi bi-key me-2  ps-1 pe-1 rounded"></i> Dashboard </a></p>
    <p class="d-flex justify-content-between align-items-center me-3 "><a href="{{ route('admin.kalender') }}" class="text-secondary m-1 ms-3 fw-bold"><i class=" me-2 bi bi-person-fill-up  ps-1 pe-1 rounded"></i> Kalender </a></p>
    <p class="d-flex justify-content-between align-items-center me-3 "><a href="{{ route('admin.booking') }}" class="text-secondary m-1 ms-3 fw-bold"><i class=" me-2 bi bi-key    ps-1 pe-1 rounded"></i> Booking </a> </p>
@endsection

@section('content')
    <div class="row justify-content-center mt-3">
        <div class="col-5">
            <div class="row justify-content-between m-3 bg-white rounded shadow p-2 " id="menuCount">
                <div class="col-4 mt-2 mb-2">
                    <div class="box-info p-3 text-center text-white bg-info rounded shadow">
                    <p class="m-1"><i class="fa-solid fa-calendar-day fs-1"></i></p>
                    <p class="m-0 fs-3 fw-bold">1</p>
                    <p class="m-0 fw-bold"><small>Kunjungan<br>Hari ini</small></p>
                    </div>
                </div>
                <div class="col-4 mt-2 mb-2">
                    <div class="box-info p-3 text-white text-center bg-danger rounded shadow">
                    <p class="m-1"><i class="fa-solid fa-calendar-days fs-1"></i></p>
                    <p class="m-0 fs-3 fw-bold">50</p>
                    <p class="m-0 fw-bold"><small>Kunjungan<br>Bulan ini</small></p>
                    </div>
                </div>
                <div class="col-4 mt-2 mb-2">
                    <div class="box-info p-3 text-white text-center bg-secondary rounded shadow">
                    <p class="m-1"><i class="fa-solid fa-people-line fs-1"></i></p>
                    <p class="m-0 fs-3 fw-bold">321</p>
                    <p class="m-0 fw-bold"><small>Total<br>Kunjungan</small></p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center m-3 bg-white rounded shadow p-3">
                <div class="col text-center">
                    <a href="" class="btn btn-primary fw-bold p-3 me-4"><span><i class="fa-regular fa-square-plus fs-1 p-2"></i></span><br>Buat Booking</a>
                    <a href="" class="btn btn-success fw-bold p-3 "><span><i class="fa-solid fa-print fs-1 p-2"></i></span><br>Cetak Laporan</a>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="row justify-content-center m-3 bg-white rounded shadow p-4 pt-2">
                <p class=" m-0 fw-bold text-center text-secondary p-2">Kunjungan Terdekat</p>
                <div class="col-5 bg-primary me-5 shadow p-3 rounded">
                    <div class="waktu-appointment text-white d-flex
                     justify-content-between fw-medium">
                        <p class="m-0">Tanggal : <br> 2024/06/12 </p>
                        <p class="m-0">waktu : <br> 08:00 - 10:00</p>
                    </div>
                    <div class="appointment-info text-white">
                        <p class="mt-2"><span>Nama PIC : </span><br> Iqbal</p>
                        <p><span>Organisasi : </span><br> Pemda Sleman</p>
                        <p><span>Jumlah Orang : </span><br> 15 Orang</p>
                        <p><span>No Telepon : </span><br> 085868144268 </p>
                    </div>
                </div>
                <div class="col-5 bg-primary p-3 shadow rounded">
                    <div class="waktu-appointment text-white  d-flex
                     justify-content-between fw-medium">
                        <p class="m-0">Tanggal : <br> 2024/06/12 </p>
                        <p class="m-0">waktu : <br> 08:00 - 10:00</p>
                    </div>
                    <div class="appointment-info text-white " >
                        <p class="mt-2"><span>Nama PIC : </span><br> Iqbal</p>
                        <p><span>Organisasi : </span><br> Pemda Sleman</p>
                        <p><span>Jumlah Orang : </span><br> 15 Orang</p>
                        <p><span>No Telepon : </span><br> 085868144268 </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center m-3 mt-0" id="tabel-booking">
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
            <tbody >
                <tr>
                <th scope="row"  class="pt-3">1</th>
                <td class="pt-3">2024/10/11</td>
                <td class="pt-3">Iqbal</td>
                <td class="pt-3">Pemda Sleman</td>
                <td class="pt-3">085868144268</td>
                <td class="pt-3">07:00:00</td>
                <td class="pt-3">16:00:00</td>
                <td class="pt-3">12</td>
                <td "><a href="#" class="btn btn-warning" style="font-size: 0.8rem ;">Edit</a> | <a href="#" class="btn btn-danger" style="font-size: 0.8rem ;">Delete</a></td>
                </tr>
                <tr>
                <th scope="row"  class="pt-3">2</th>
                <td class="pt-3">2024/10/11</td>
                <td class="pt-3">Iqbal</td>
                <td class="pt-3">Pemda Sleman</td>
                <td class="pt-3">085868144268</td>
                <td class="pt-3">07:00:00</td>
                <td class="pt-3">16:00:00</td>
                <td class="pt-3">12</td>
                <td "><a href="#" class="btn btn-warning" style="font-size: 0.8rem ;">Edit</a> | <a href="#" class="btn btn-danger" style="font-size: 0.8rem ;">Delete</a></td>
                </tr>
            </tbody>
        </table>
        <a href="#" style="text-decoration: none;">Selengkapnya <i class="fa-solid fa-caret-right"></i></a>
    </div>
    </div>
@endsection

@section('menuHp')
                <div class="col text-center ">
                    <a href="{{ route('admin.kalender') }}" class="text-secondary"><p><i class="fa-regular fa-calendar-days m-0 p-0 pt-2"></i></p>
                    <p>Kalender</p></a>
                </div>
                <div class="col text-center rounded-top bg-secondary">
                    <a href="{{ route('admin.dashboard') }}" class="text-white"><p><i class="fa-solid fa-globe m-0 p-0 pt-2"></i></p>
                    <p>Dashboard</p></a>
                </div>
                <div class="col text-center">
                    <a href="{{ route('admin.booking') }}" class="text-secondary"><p><i class="fa-solid fa-house-lock m-0 p-0 pt-2"></i></p>
                    <p>Booking</p></a>
                </div>
@endsection

@section('scripts')

@endsection