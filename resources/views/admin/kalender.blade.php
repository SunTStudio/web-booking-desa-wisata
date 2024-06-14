
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
            <i class="bi bi-key me-2 ps-1 pe-1 rounded"></i> Dashboard 
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
@endsection

@section('content')
    <div class="row justify-content-center m-lg-5 m-1 mt-5">
        <div class="col bg-white p-lg-5 p-3 rounded text-center">
            <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#tambahModal">Tambah Booking</button>
            <div id='calendar'></div>
        </div>
    </div>

    <div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Booking</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
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
                        <button type="submit" class="btn btn-primary" onclick="tambahBooking(event)">Submit</button>
                    </form>
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
                    <a href="{{ route('admin.kalender') }}" class="text-white"><p><i class="fa-regular fa-calendar-days m-0 p-0 pt-2"></i></p>
                    <p>Kalender</p></a>
                </div>
                <div class="col text-center ">
                    <a href="{{ route('admin.dashboard') }}" class="text-secondary"><p><i class="fa-solid fa-globe m-0 p-0 pt-2"></i></p>
                    <p>Dashboard</p></a>
                </div>
                <div class="col text-center">
                    <a href="{{ route('admin.booking') }}" class="text-secondary"><p><i class="fa-solid fa-house-lock m-0 p-0 pt-2"></i></p>
                    <p>Booking</p></a>
                </div>
@endsection

@section('scripts')
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/locales-all.global.min.js'></script>
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
                    events: [
                        {
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
