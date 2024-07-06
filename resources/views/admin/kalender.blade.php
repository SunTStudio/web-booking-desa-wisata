@extends('admin.layout')

@section('title', 'Kalender | Admin')

@section('titleNav', 'Kalender')

@section('css')
<link href='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.css' rel='stylesheet' />
<link rel="stylesheet" href="/css/kalender.css">
@endsection

@section('menu')
<p class="d-flex justify-content-between align-items-center me-3">
    <a href="{{ route('admin.dashboard') }}" class="text-secondary fw-bold m-1 ms-3">
        <i class="bi bi-view-list me-2 ps-1 pe-1 rounded"></i> Dashboard
    </a>
</p>
<p class="btn btn-secondary text-light d-flex justify-content-between align-items-center me-3">
    <a href="{{ route('admin.kalender') }}" class="text-light m-1 ms-3 fw-bold">
        <i class="me-2 bi bi-person-fill-up ps-1 pe-1 rounded"></i> Kalender
    </a>
</p>
<p class="d-flex justify-content-between align-items-center me-3">
    <a href="{{ route('admin.booking') }}" class="text-secondary m-1 ms-3 fw-bold">
        <i class="me-2 bi bi-key ps-1 pe-1 rounded"></i> Booking
    </a>
</p>
<p class="d-flex justify-content-between align-items-center me-3 ">
    <a href="{{ route('admin.laporan') }}" class="text-secondary m-1 ms-3 fw-bold">
        <i class=" me-2 bi bi-journal ps-1 pe-1 rounded"></i> Laporan
    </a>
</p>
@endsection

@section('content')
<div class="row justify-content-center m-lg-5 m-1 mt-5">
    <div class="col bg-white p-lg-5 p-3 rounded text-center">
        <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#tambahModal">Tambah Booking</button>
        <div id='calendar'></div>
    </div>
</div>

<div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Booking</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h5 class="fw-bold m-3">Isi Data Diri Booking</h5>
                <div class="row justify-content-center border rounded p-4 m-3">
                    <div class="col me-4">
                        <form method="GET" action="">
                            <div class="mb-3">
                                <label for="tanggal-booking" class="form-label">Tanggal Visitor</label>
                                <input type="text" class="form-control" name="tanggal-booking" id="tanggal-booking" placeholder="Masukan tanggal YYYY-MM-DD" value="{{ htmlspecialchars($tanggalBooking) }}">
                            </div>
                            <div class="mb-3">
                                <label for="nama-pembooking" class="form-label">Nama Pembooking</label>
                                <input type="text" class="form-control" name="nama-booking" id="nama-pembooking" value="{{ htmlspecialchars($namaBooking) }}">
                            </div>
                            <div class="mb-3">
                                <label for="no-telp-pic" class="mb-2">No. Telp PIC</label>
                                <input type="text" placeholder="Masukan No. Telp" class="form-control" name="no-telp-pic" id="no-telp-pic" value="{{ htmlspecialchars($noTelpPic) }}">
                            </div>

                            <button type="submit" class="btn btn-primary" onclick="tambahBooking(event)">Submit</button>
                        </form>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label for="jam-booking-mulai" class="form-label">Jam Booking Mulai</label>
                            <input type="time" class="form-control" name="jam-booking-mulai" id="jam-booking-mulai" value="{{ htmlspecialchars($jamBookingMulai) }}">
                        </div>
                        <div class="mb-3">
                            <label for="jam-booking-selesai" class="form-label">Jam Booking Selesai</label>
                            <input type="time" class="form-control" name="jam-booking-selesai" id="jam-booking-selesai" value="{{ htmlspecialchars($jamBookingSelesai) }}">
                        </div>
                        <div class="mb-3">
                            <label for="jumlah-visitor" class="mb-2">Jumlah Visitor</label>
                            <input type="text" placeholder="Masukan Jumlah Visitor" class="form-control" name="jumlah-visitor" id="jumlah-visitor" value="{{ htmlspecialchars($jumlahVisitor) }}">
                        </div>
                    </div>

                </div>

                <h5 class="fw-bold m-3 mt-5">Pilih Paket-Paket Desa Wisata</h5>
                <div class="row justify-content-center m-3">
                    <div class="col">
                        <div class="row border rounded p-4 mb-3">
                            <label for="paket-batik" class="form-label fw-bold">Paket Batik</label>
                            @foreach ($batiks as $batik)
                            <div class="col-3 border p-3 m-3">
                                <div class="form-check">
                                    <input class="form-check-input" value="{{ $batik->id }}" type="checkbox" id="batik{{ $batik->id }}">
                                    <label class="form-check-label" for="batik{{ $batik->id }}">
                                        <h5 class="card-header fw-bold">{{ $batik->nama }}</h5>
                                        <hr>
                                        <small>Souvenir yang didapat:</small>
                                        <p class="card-text">{{ $batik->deskripsi }}</p>
                                        <small>Harga Paket:</small>
                                        <p class="card-text">{{ $batik->harga }}</p>
                                    </label>
                                </div>
                            </div>
                            @endforeach
                        </div>

                        <!-- Paket Kesenian -->
                        <div class="row border rounded p-4 mb-3">
                            <label for="paket-kesenian" class="form-label fw-bold">Paket Kesenian</label>
                            @foreach ($kesenians as $kesenian)
                            <div class="col-3 border p-3 m-3">
                                <div class="form-check">
                                    <input class="form-check-input" value="{{ $kesenian->id }}" type="checkbox" id="kesenian{{ $kesenian->id }}">
                                    <label class="form-check-label" for="kesenian{{ $kesenian->id }}">
                                        <h5 class="card-header fw-bold">{{ $kesenian->nama }}</h5>
                                        <hr>
                                        <small>Deskripsi:</small>
                                        <p class="card-text">{{ $kesenian->deskripsi }}</p>
                                        <small>Harga Belajar:</small>
                                        <p class="card-text">{{ $kesenian->harga_belajar }}</p>
                                        <small>Harga Pementasan:</small>
                                        <p class="card-text">{{ $kesenian->harga_pementasan }}</p>
                                    </label>
                                </div>
                            </div>
                            @endforeach
                        </div>

                        <!-- Paket Cocok Tanam -->
                        <div class="row border rounded p-4 mb-3">
                            <label for="paket-cocok-tanam" class="form-label fw-bold">Paket Cocok Tanam</label>
                            @foreach ($cocokTanams as $cocokTanam)
                            <div class="col-3 border p-3 m-3">
                                <div class="form-check">
                                    <input class="form-check-input" value="{{ $cocokTanam->id }}" type="checkbox" id="cocokTanam{{ $cocokTanam->id }}">
                                    <label class="form-check-label" for="cocokTanam{{ $cocokTanam->id }}">
                                        <h5 class="card-header fw-bold">{{ $cocokTanam->nama }}</h5>
                                        <hr>
                                        <small>Deskripsi:</small>
                                        <p class="card-text">{{ $cocokTanam->deskripsi }}</p>
                                        <small>Harga:</small>
                                        <p class="card-text">{{ $cocokTanam->harga }}</p>
                                    </label>
                                </div>
                            </div>
                            @endforeach
                        </div>

                        <!-- Paket Permainan -->
                        <div class="row border rounded p-4 mb-3">
                            <label for="paket-permainan" class="form-label fw-bold">Paket Permainan</label>
                            @foreach ($permainans as $permainan)
                            <div class="col-3 border p-3 m-3">
                                <div class="form-check">
                                    <input class="form-check-input" value="{{ $permainan->id }}" type="checkbox" id="permainan{{ $permainan->id }}">
                                    <label class="form-check-label" for="permainan{{ $permainan->id }}">
                                        <h5 class="card-header fw-bold">{{ $permainan->nama }}</h5>
                                        <hr>
                                        <small>Deskripsi:</small>
                                        <p class="card-text">{{ $permainan->deskripsi }}</p>
                                        <small>Harga:</small>
                                        <p class="card-text">{{ $permainan->harga }}</p>
                                    </label>
                                </div>
                            </div>
                            @endforeach
                        </div>

                        <!-- Paket Kuliner -->
                        <div class="row border rounded p-4 mb-3">
                            <label for="paket-kuliner" class="form-label fw-bold">Paket Kuliner</label>
                            @foreach ($kuliners as $kuliner)
                            <div class="col-3 border p-3 m-3">
                                <div class="form-check">
                                    <input class="form-check-input" value="{{ $kuliner->id }}" type="checkbox" id="kuliner{{ $kuliner->id }}">
                                    <label class="form-check-label" for="kuliner{{ $kuliner->id }}">
                                        <h5 class="card-header fw-bold">{{ $kuliner->nama }}</h5>
                                        <hr>
                                        <small>Deskripsi:</small>
                                        <p class="card-text">{{ $kuliner->deskripsi }}</p>
                                        <small>Harga:</small>
                                        <p class="card-text">{{ $kuliner->harga }}</p>
                                    </label>
                                </div>
                            </div>
                            @endforeach
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="eventModal" tabindex="-1" role="dialog" aria-labelledby="eventModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="eventModalLabel">Info Kunjungan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="modalBody">
                <!-- Event information will be injected here -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

@endsection

@section('menuHp')
<div class="col text-center rounded-top bg-secondary">
    <a href="{{ route('admin.kalender') }}" class="text-white">
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
<div class="col text-center">
    <a href="{{ route('admin.booking') }}" class="text-secondary">
        <p><i class="fa-solid fa-house-lock m-0 p-0 pt-2"></i></p>
        <p>Booking</p>
    </a>
</div>


@endsection

@section('scripts')
<script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/locales-all.global.min.js'></script>
<script src="/js/kalender.js"></script>

<script>
    var calendar; // Declare calendar variable in the global scope

    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');

        if (calendarEl) {
            calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'timeGridWeek',
                selectable: true,
                locale: 'id',
                allDaySlot: false,
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'timeGridDay,timeGridWeek,dayGridMonth'
                },
                slotLabelFormat: {
                    hour: '2-digit',
                    minute: '2-digit',
                    hour12: false
                },
                eventTimeFormat: {
                    hour: '2-digit',
                    minute: '2-digit',
                    hour12: false
                },
                events: [{
                        title: 'Kementerian Budaya',
                        start: '2024-06-01T10:00:00',
                        end: '2024-06-01T12:00:00'
                    },
                    {
                        title: 'Dusun RT 01',
                        start: '2024-06-07T14:00:00',
                        end: '2024-06-07T16:00:00'
                    },
                    {
                        title: 'Pemda Bantul',
                        start: '2024-06-09T09:00:00',
                        end: '2024-06-09T10:00:00'
                    }
                ],
                eventClick: function(info) {
                    // Prevent the browser from following the URL
                    info.jsEvent.preventDefault();

                    // Update the modal's content
                    document.getElementById('modalBody').innerHTML = `
                        <p><strong>Pengunjung : </strong> ${info.event.title}</p>
                        <p><strong>Waktu Mulai : </strong> ${info.event.start}</p>
                        <p><strong>Waktu Selesai : </strong> ${info.event.end}</p>
                    `;

                    // Show the modal
                    $('#eventModal').modal('show');
                }
            });

            calendar.render();
        } else {
            console.error("Element with id 'calendar' not found.");
        }
    });

    function tambahBooking(event) {
        event.preventDefault(); // Mencegah form dikirim secara default

        var name = document.getElementById('nama-pembooking').value;
        var tanggal = document.getElementById('tanggal-booking').value;
        var jamMulai = document.getElementById('jam-booking-mulai').value;
        var jamSelesai = document.getElementById('jam-booking-selesai').value;

        if (name && tanggal && jamMulai && jamSelesai) {
            var event = {
                title: `${name}`,
                start: `${tanggal}T${jamMulai}:00`,
                end: `${tanggal}T${jamSelesai}:00`,
                allDay: false
            };
            calendar.addEvent(event);
            // Optionally close the modal
            var modal = bootstrap.Modal.getInstance(document.getElementById('tambahModal'));
            modal.hide();
        } else {
            alert("Please fill in all fields");
        }
    }
</script>
@endsection