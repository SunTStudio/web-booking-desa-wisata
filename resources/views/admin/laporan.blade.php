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
    <div class="d-flex justify-content-between px-5">
        <form action="{{ route('admin.laporan.search') }}" class="d-flex gap-4">
            @csrf
            <div class="form-group">
                <label for="bulan">Bulan:</label>
                <select name="bulan" id="bulan" class="form-select">
                    <option value="">Tampilkan Semua</option>
                    <option value="1">Januari</option>
                    <option value="2">Februari</option>
                    <option value="3">Maret</option>
                    <option value="4">April</option>
                    <option value="5">Mei</option>
                    <option value="6">Juni</option>
                    <option value="7">Juli</option>
                    <option value="8">Agustus</option>
                    <option value="9">September</option>
                    <option value="10">Oktober</option>
                    <option value="11">November</option>
                    <option value="12">Desember</option>
                </select>
            </div>
            <div class="form-group">
                <label for="tahun">Tahun:</label>
                <input type="number" name="tahun" id="tahun" class="form-control" value="{{ date('Y') }}">
            </div>
            <div class="d-flex align-items-end">
                <button type="submit" class="btn btn-primary px-4">Filter</button>
            </div>
        </form>
        <div class="d-flex align-items-end">
            <a href="{{ route('admin.laporan.print', ['bulan' => request('bulan'), 'tahun' => request('tahun')]) }}" class="btn btn-danger">Cetak PDF</a>
        </div>
    </div>
    <div class="row justify-content-center rounded bg-white mt-4 mb-5 mx" id="tabel-laporan">
        <div class="col p-3">
            <div class="table-responsive" style="overflow-x: auto;">
                <table class="table text-center">
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
                            <th scope="col">Guide</th>
                            <th scope="col">Tagihan</th>
                            <th scope="col">Detail</th>
                            <!-- <th scope="col">Status</th> -->
                            <!-- <th scope="col" style="width:10%;">Opsi</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($laporans as $laporan )
                        <tr>
                            <th scope="row" class="pt-3">{{ $loop->iteration }}</th>
                            <td class="pt-3">{{ $laporan->nama_pic }}</td>
                            <td class="pt-3">{{ $laporan->noTelpPIC }}</td>
                            <td class="pt-3">{{ $laporan->organisasi }}</td>
                            <td class="pt-3">{{ $laporan->visitor }}</td>
                            <td class="pt-3">{{ \Carbon\Carbon::parse($laporan->tanggal)->translatedFormat('d F Y') }}</td>
                            <td class="pt-3">{{ $laporan->jam_mulai }}</td>
                            <td class="pt-3">{{ $laporan->jam_selesai }}</td>
                            <th scope="col">{{ $laporan->guide->name }}</th>
                            <th scope="col">Rp {{ number_format($laporan->tagihan, 0, ',', '.') }}</th>
                            <th scope="col"><a href="{{ route('admin.detail', ['id' => $laporan->id]) }}">Detail</a></th>
                            <!-- <td><a href="#" class="btn btn-warning" style="font-size: 0.8rem ;" data-bs-toggle="modal" data-bs-target="#tambahModal"><i class="fa-solid fa-pen-to-square"></i></a> | <a href="#" class="btn btn-danger" style="font-size: 0.8rem ;"><i class="fa-solid fa-trash-can"></i></a></td> -->
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="9">Total Pendapatan</td>
                            <td>Rp {{ number_format($totalPendapatan, 0, ',', '.') }}</td>
                        </tr>
                    </tfoot>
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
</div>
@endsection

@section('menuHp')
                <div class="col text-center border-end">
                    <a href="{{ route('admin.kalender') }}" class="text-secondary"><p><i class="fa-regular fa-calendar-days m-0 p-0 pt-2"></i></p>
                    <p>Kalender</p></a>
                </div>
                <div class="col text-center border-end">
                    <a href="{{ route('admin.dashboard') }}" class="text-secondary"><p><i class="fa-solid fa-globe m-0 p-0 pt-2"></i></p>
                    <p>Dashboard</p></a>
                </div>
                <div class="col text-center ">
                    <a href="{{ route('admin.booking') }}" class="text-white"><p><i class="fa-solid fa-house-lock m-0 p-0 pt-2"></i></p>
                    <p>Booking</p></a>
                </div>
                <div class="col text-center rounded-top bg-secondary">
                    <a href="{{ route('admin.laporan') }}" class="text-secondary">
                        <p><i class="fa-solid fa-file-lines m-0 p-0 pt-2"></i></p>
                        <p>Laporan</p>
                    </a>
                </div>
@endsection

@section('scripts')

@endsection