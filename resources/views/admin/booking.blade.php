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
                        <th scope="col" style="vertical-align: top">No</th>
                        <th scope="col">Nama PIC</th>
                        <th scope="col" style="vertical-align: top">No Telpon</th>
                        <th scope="col">Nama Organisasi</th>
                        <th scope="col">Jumlah Visitor</th>
                        <th scope="col">Tanggal Kunjungan</th>
                        <th scope="col">Jam Kunjungan</th>
                        <th scope="col" style="vertical-align: top">Detail</th>
                        <th scope="col">Tagihan Kunjungan</th>
                        <th scope="col" style="vertical-align: top">Guide</th>
                        <th scope="col" style="vertical-align: top">Status ACC</th>
                        <th scope="col" style="width:10%; vertical-align: top">Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($bookings as $booking )
                    <tr>
                        <th scope="row" class="pt-3">{{ $loop->iteration }}</th>
                        <td class="pt-3">{{ $booking->nama_pic }}</td>
                        <td class="pt-3">{{ $booking->noTelpPIC }}</td>
                        <td class="pt-3">{{ $booking->organisasi }}</td>
                        <td class="pt-3">{{ $booking->visitor }}</td>
                        <td class="pt-3">{{ $booking->tanggal }}</td>
                        <td class="pt-3">{{ date('H:i', strtotime($booking->jam_mulai)) }} - {{ date('H:i', strtotime($booking->jam_selesai)) }}</td>
                        <th scope="col"><a href="{{ route('admin.detail', ['id' => $booking->id]) }}" style="text-decoration: none; color:rgb(2, 77, 2); font-size:1.5rem;"><i class="fa-solid fa-file-invoice"></i></a></th>
                        <th scope="col">Rp {{ number_format($booking->tagihan, 0, ',', '.') }}</th>
                        <th scope="col">{{ $booking->guide->name }}</th>
                        <td scope="col">
                            <!-- <button class="btn btn-dark text-light">{{ $booking->status }}</button> -->
                            <form id="statusForm-{{ $booking->id }}" method="GET" action="{{ route('admin.bookingUpdate', ['id' => $booking->id]) }}">
                                @csrf
                                <select class="form-select text-light" name="status" id="status-{{ $booking->id }}" onchange="updateStatus('{{ $booking->id }}', this.value)">
                                    <option value="{{ $booking->status }}" class="fs-5" selected hidden>{{ $booking->status }}</option>
                                    <option value="Belum ACC" class="py-5">Belum ACC</option>
                                    <option value="Sudah ACC">Sudah ACC</option>
                                </select>
                            </form>
                        </td>
                        <td><a href="{{ route('admin.edit.booking',['id' => $booking->id]) }}" class="btn btn-warning" style="font-size: 0.8rem ;"><i class="fa-solid fa-pen-to-square"></i></a> | <a class="btn btn-danger" style="font-size: 0.8rem ;" data-bs-toggle="modal" data-bs-target="#target{{ $booking->id }}"><i class="fa-solid fa-trash-can"></i></a>

                            <div class="modal fade" id="target{{ $booking->id }}" tabindex="-1" aria-labelledby="target{{ $booking->id }}" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Peringatan</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p class="h5 fw-bold">Yakin Menghapus Data ini?</p>
                                        </div>
                                        <div class="modal-footer">
                                            <a type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</a>
                                            <a class="btn btn-danger" href="{{ route('admin.booking.delete',['id' => $booking->id]) }}">Hapus</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </td>
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
@endsection

@section('menuHp')
<div class="col text-center border-end">
    <a href="{{ route('admin.kalender') }}" class="text-secondary">
        <p><i class="fa-regular fa-calendar-days m-0 p-0 pt-2"></i></p>
        <p>Kalender</p>
    </a>
</div>
<div class="col text-center ">
    <a href="{{ route('admin.dashboard') }}" class="text-secondary">
        <p><i class="fa-solid fa-globe m-0 p-0 pt-2"></i></p>
        <p>Dashboard</p>
    </a>
</div>
<div class="col text-center rounded-top bg-secondary">
    <a href="{{ route('admin.booking') }}" class="text-white">
        <p><i class="fa-solid fa-house-lock m-0 p-0 pt-2"></i></p>
        <p>Booking</p>
    </a>
</div>
<div class="col text-center ">
    <a href="{{ route('admin.laporan') }}" class="text-secondary">
        <p><i class="fa-solid fa-file-lines m-0 p-0 pt-2"></i></p>
        <p>Laporan</p>
    </a>
</div>
@endsection

@section('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function updateStatus(bookingId, status) {
        var formData = {
            _token: '{{ csrf_token() }}',
            status: status
        };

        $.ajax({
            type: 'GET',
            url: `/admin/update/${bookingId}`,
            data: formData,
            success: function(response) {
                if (response.success) {
                    $('#status-button-' + bookingId).text(status);
                    Swal.fire({
                        icon: "success",
                        title: "Status berhasil diperbarui!",
                        showConfirmButton: false,
                        timer: 1500
                    });
                    updateSelectColor(bookingId, status);
                } else {
                    Swal.fire({
                        icon: "error",
                        title: "Oops...",
                        text: "Gagal memperbarui status.",
                    });
                }
            },
            error: function(error) {
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "Terjadi kesalahan: " + error.responseJSON.message,
                });
            }
        });
    }

    function updateSelectColor(bookingId, status) {
        var selectElement = document.getElementById('status-' + bookingId);
        if (selectElement) {
            selectElement.classList.remove('bg-secondary', 'bg-success'); // Remove existing classes
            if (status === 'Belum ACC') {
                selectElement.classList.add('bg-secondary');
            } else if (status === 'Sudah ACC') {
                selectElement.classList.add('bg-success');
            }
        }
    }

    // Set initial color based on the current status
    document.addEventListener('DOMContentLoaded', function() {
        var selectElements = document.querySelectorAll('select[id^="status-"]');
        selectElements.forEach(function(selectElement) {
            var status = selectElement.value;
            var bookingId = selectElement.id.split('-')[1];
            updateSelectColor(bookingId, status);
        });
    });
</script>
@endsection