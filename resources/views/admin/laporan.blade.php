@extends('admin.layout')

@section('title', 'Dashboard | Admin')

@section('titleNav', 'Dashboard')

@section('css')

<link rel="stylesheet" href="/css/dashboard.css">
@endsection

@section('menu')
<p class="d-flex justify-content-between align-items-center me-3 "><a href="{{ route('admin.dashboard') }}" class=" text-secondary m-1 ms-3 fw-bold"><i class="bi bi-view-list me-2 ps-1 pe-1 rounded"></i> Dashboard </a></p>
<p class="d-flex justify-content-between align-items-center me-3 "><a href="{{ route('admin.kalender') }}" class="text-secondary m-1 ms-3 fw-bold"><i class=" me-2 bi bi-person-fill-up  ps-1 pe-1 rounded"></i> Kalender </a></p>
<p class="d-flex justify-content-between align-items-center me-3 "><a href="{{ route('admin.booking') }}" class="text-secondary m-1 ms-3 fw-bold"><i class=" me-2 bi bi-key ps-1 pe-1 rounded"></i> Booking </a> </p>
<p class="btn btn-secondary text-light d-flex justify-content-between align-items-center me-3 "><a href="{{ route('admin.laporan') }}" class="text-light fw-bold m-1 ms-3"><i class=" me-2 bi bi-journal ps-1 pe-1 rounded"></i> Laporan </a> </p>
@endsection

@section('content')
<div class="row justify-content-center m-3 mt-5" id="tabel-booking">
    <a href="" class="col-2 btn btn-primary mb-2">Cetak</a>
    <form class="d-flex col-11" action="{{ route('admin.laporan.search') }}" role="search">
        <input class="form-control me-2 text-align-center" type="search" name="search" placeholder="Cari Tanggal" aria-label="Search" value="{{ $request->get('search') }}">
        <button class="btn btn-primary fw-medium" type="submit">Search</button>
    </form>
    <div class="col-11 bg-white rounded p-3 text-center mt-3">
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
                <!-- <tr>
                    <th scope="row" class="pt-3">2</th>
                    <td class="pt-3">2024/10/11</td>
                    <td class="pt-3">Iqbal</td>
                    <td class="pt-3">Pemda Sleman</td>
                    <td class="pt-3">085868144268</td>
                    <td class="pt-3">07:00:00</td>
                    <td class="pt-3">16:00:00</td>
                    <td class="pt-3">12</td>
                    <td "><a href=" #" class="btn btn-warning" style="font-size: 0.8rem ;">Edit</a> | <a href="#" class="btn btn-danger" style="font-size: 0.8rem ;">Delete</a> | <a href="admin/invoice" class="btn btn-info" style="font-size: 0.8rem ;">Cetak</a></td>
                </tr> -->
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

@endsection