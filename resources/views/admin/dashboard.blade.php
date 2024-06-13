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
            <div class="row justify-content-between">
                <div class="col-3 p-2">
                    <p></p>
                    <p></p>
                </div>
                <div class="col-3 p-2">
                    <p></p>
                    <p></p>
                </div>
                <div class="col-3 p-2">
                    <p></p>
                    <p></p>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="row justify-content-center m-3 bg-white rounded shadow p-4 pt-2">
                <p class="h5 fw-bold text-center text-secondary p-2">Kunjungan Terdekat</p>
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