@extends('admin.layout')

@section('title', 'Booking | Admin')

@section('titleNav', 'Booking')

@section('css')
    <link rel="stylesheet" href="/css/booking.css">
@endsection

@section('menu')
    <p class=" d-flex justify-content-between align-items-center me-3 "><a href="{{ route('admin.dashboard') }}" class=" text-secondary fw-bold m-1 ms-3"><i class="bi bi-view-list me-2  ps-1 pe-1 rounded"></i> Dashboard </a></p>
    <p class="d-flex justify-content-between align-items-center me-3 "><a href="{{ route('admin.kalender') }}" class="text-secondary m-1 ms-3 fw-bold"><i class=" me-2 bi bi-person-fill-up  ps-1 pe-1 rounded"></i> Kalender </a></p>
    <p class="btn btn-secondary text-light d-flex justify-content-between align-items-center me-3 "><a href="{{ route('admin.booking') }}" class="text-light m-1 ms-3 fw-bold"><i class=" me-2 bi bi-key    ps-1 pe-1 rounded"></i> Booking </a> </p>
    <p class="d-flex justify-content-between align-items-center me-3 "><a href="{{ route('admin.laporan') }}" class="text-secondary m-1 ms-3 fw-bold"><i class=" me-2 bi bi-journal ps-1 pe-1 rounded"></i> Laporan </a> </p>
@endsection

@section('content')
<div class="row p-4 mt-3" id="search">
    <div class="col-lg-4 col-12">
        <div class="search-pic">
            <form action="{{ route('admin.booking.pic.search') }}">
                <div class="form-floating mb-3 d-flex">
                    <input type="text" class="form-control" id="floatingInput" name="namePIC" @if (session()->has('nama_pic')) value=" {{ session('nama_pic') }} "
                        @else
                        value="" @endif placeholder="Nama PIC">
                    <label for="floatingInput">Nama Pembooking..</label>
                    <button type="submit" class="btn btn-secondary fw-bold ms-3 w-50"><small>Cari Nama</small></button>
                </div>
            
        </div>
    </div>
    <div class="col-lg-4 col-12">
        <div class="search-tanggal">
                <div class="form-floating mb-3 d-flex">
                    <input type="date" class="form-control" id="floatingInput" name="tanggal" @if (session()->has('tanggal')) value=" {{ session('tanggal') }} "
                        @else
                        value="" @endif placeholder="name@example.com">
                    
                    <label for="floatingInput">Cari Tanggal..</label>
                    <button type="submit" class="btn btn-secondary fw-bold ms-3 w-75"><small>Cari Tanggal</small></button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="row justify-content-center rounded bg-white m-3 mt-0 mb-5" id="tabel-booking">
    <div class="col p-3">
    <div class="table-responsive" style="overflow-x: auto;">
        <table class="table text-center ">
            <thead>
                <tr>
                <th scope="col">No</th>
                <th scope="col">Nama PIC</th>
                <th scope="col">No Telpon</th>
                <th scope="col">Nama Organisasi</th>
                <th scope="col">Jumlah Visitor</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Jam Mulai</th>
                <th scope="col">Jam Selesai</th>
                <th scope="col">Detail</th>
                <th scope="col">Tagihan</th>
                <th scope="col">Guide</th>
                <th scope="col">Status</th>
                <th scope="col" style="width:10%;">Opsi</th>
                </tr>
            </thead>
            <tbody >
                @foreach ($bookings as $booking )
                <tr>
                <th scope="row"  class="pt-3">1</th>
                <td class="pt-3">{{ $booking->nama_pic }}</td>
                <td class="pt-3">{{ $booking->noTelpPIC }}</td>
                <td class="pt-3">{{ $booking->organisasi }}</td>
                <td class="pt-3">{{ $booking->visitor }}</td>
                <td class="pt-3">{{ $booking->tanggal }}</td>
                <td class="pt-3">{{ $booking->jam_mulai }}</td>
                <td class="pt-3">{{ $booking->jam_selesai }}</td>
                <th scope="col"><a href="{{ route('admin.detail', ['id' => $booking->id]) }}">Detail</a></th>
                <th scope="col">Rp {{ $booking->tagihan }}</th>
                <th scope="col">{{ $booking->guide->name }}</th>
                <td class="pt-3">
                    <select class="form-select btn btn-dark text-light" aria-label="Default select example">
                        <option value="1" >Belum ACC</option>
                        <option value="2">Sudah ACC</option>
                    </select>
                </td>
                <td ><a href="#" class="btn btn-warning" style="font-size: 0.8rem ;" data-bs-toggle="modal" data-bs-target="#tambahModal"><i class="fa-solid fa-pen-to-square"></i></a> | <a href="#" class="btn btn-danger" style="font-size: 0.8rem ;"><i class="fa-solid fa-trash-can"></i></a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </nav>

        
    </div>
</div>

<div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Booking</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="">
                    <div class="mb-3">
                        <label for="" class="mb-2">Nama PIC</label>
                        <input type="text" placeholder="Masukan Nama" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="" class="mb-2">No. Telp PIC</label>
                        <input type="text" placeholder="Masukan No. Telp" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="" class="mb-2">Jumlah Visitor</label>
                        <input type="text" placeholder="Masukan Jumlah Visitor" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="" class="mb-2">Tanggal Visitor</label>
                        <input type="text" placeholder="Masukan tanggal YYYY-MM-DD" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="" class="mb-2">Jam Mulai</label>
                        <input type="time" placeholder="Masukan Jam Mulai" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="" class="mb-2">Jam Selesai</label>
                        <input type="time" placeholder="Masukan Jam Selesai" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="" class="mb-2">Detail</label>
                        <input type="time" placeholder="Masukan Jam Selesai" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="" class="mb-2">Guide</label>
                        <input type="time" placeholder="Masukan Jam Selesai" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Edit Booking</button>
                </form>
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
                <div class="col text-center ">
                    <a href="{{ route('admin.dashboard') }}" class="text-secondary"><p><i class="fa-solid fa-globe m-0 p-0 pt-2"></i></p>
                    <p>Dashboard</p></a>
                </div>
                <div class="col text-center rounded-top bg-secondary">
                    <a href="{{ route('admin.booking') }}" class="text-white"><p><i class="fa-solid fa-house-lock m-0 p-0 pt-2"></i></p>
                    <p>Booking</p></a>
                </div>
@endsection

@section('scripts')

@endsection