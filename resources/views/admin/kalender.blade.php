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
                            <form method="GET" action="{{ route('admin.bookingProses') }}">
                                <div class="mb-3">
                                    <label for="tanggal-booking" class="form-label">Tanggal Visitor</label>
                                    <input type="date" class="form-control" name="tanggal" id="tanggal-booking" placeholder="Masukan tanggal YYYY-MM-DD" value="">
                                </div>
                                <div class="mb-3">
                                    <label for="nama-pembooking" class="form-label">Nama Pembooking</label>
                                    <input type="text" class="form-control" name="nama_pic" id="nama-pembooking" value="">
                                </div>
                                <div class="mb-3">
                                    <label for="nama-pembooking" class="form-label">Nama Organisasi</label>
                                    <input type="text" class="form-control" name="organisasi" id="nama-pembooking" value="">
                                </div>
                                <div class="mb-3">
                                    <label for="no-telp-pic" class="mb-2">No. Telp PIC</label>
                                    <input type="text" placeholder="Masukan No. Telp" class="form-control" name="notelppic" id="no-telp-pic" value="">
                                </div>
                                
                               
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                    <label for="jam-booking-mulai" class="form-label">Jam Booking Mulai</label>
                                    <input type="time" class="form-control" name="jam_mulai" id="jam-booking-mulai" value="">
                                </div>
                                <div class="mb-3">
                                    <label for="jam-booking-selesai" class="form-label">Jam Booking Selesai</label>
                                    <input type="time" class="form-control" name="jam_selesai" id="jam-booking-selesai" value="">
                                </div>
                                <div class="mb-3">
                                    <label for="jumlah-visitor" class="mb-2">Jumlah Visitor</label>
                                    <input type="text" placeholder="Masukan Jumlah Visitor" class="form-control" name="visitor" id="jumlah-visitor" value="">
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
                                        <input class="form-check-input" value="{{ $batik->id }}" type="radio" name="batik" id="batik{{ $batik->id }}" @if ($loop->first) checked @endif>
                                        <label class="form-check-label" for="batik{{ $batik->id }}">
                                            <h5 class="card-header fw-bold">{{ $batik->nama }}</h5>
                                            <hr>
                                            <small>Souvenir yang didapat:</small>
                                            <p class="card-text">{{ $batik->deskripsi }}</p>
                                            <small>Harga Paket:</small>
                                            <p class="card-text">Rp {{ $batik->harga }}</p>
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
                                        <input class="form-check-input" value="{{ $kesenian->id }}" type="radio" name="kesenian" id="kesenian{{ $kesenian->id }}" @if ($loop->first) checked @endif>
                                        <label class="form-check-label" for="kesenian{{ $kesenian->id }}">
                                            <h5 class="card-header fw-bold">{{ $kesenian->nama }}</h5>
                                            <hr>
                                            <small>Deskripsi:</small>
                                            <p class="card-text">{{ $kesenian->deskripsi }}</p>
                                            <small>Harga Belajar:</small>
                                            <p class="card-text">{{ $kesenian->harga_belajar }}</p>
                                            <small>Harga Pementasan:</small>
                                            <p class="card-text">Rp {{ $kesenian->harga_pementasan }}</p>
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
                                        <input class="form-check-input" value="{{ $cocokTanam->id }}" type="radio" name="cocokTanam" id="cocokTanam{{ $cocokTanam->id }}" @if ($loop->first) checked @endif>
                                        <label class="form-check-label" for="cocokTanam{{ $cocokTanam->id }}">
                                            <h5 class="card-header fw-bold">{{ $cocokTanam->nama }}</h5>
                                            <hr>
                                            <small>Deskripsi:</small>
                                            <p class="card-text">{{ $cocokTanam->deskripsi }}</p>
                                            <small>Harga:</small>
                                            <p class="card-text">Rp {{ $cocokTanam->harga }}</p>
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
                                        <input class="form-check-input" value="{{ $permainan->id }}" type="radio" name="permainan" id="permainan{{ $permainan->id }}" @if ($loop->first) checked @endif>
                                        <label class="form-check-label" for="permainan{{ $permainan->id }}">
                                            <h5 class="card-header fw-bold">{{ $permainan->nama }}</h5>
                                            <hr>
                                            <small>Deskripsi:</small>
                                            <p class="card-text">{{ $permainan->deskripsi }}</p>
                                            <small>Harga:</small>
                                            <p class="card-text">Rp {{ $permainan->harga }}</p>
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
                                        <input class="form-check-input" value="{{ $kuliner->id }}" type="radio" name="kuliner" id="kuliner{{ $kuliner->id }}" @if ($loop->first) checked @endif>
                                        <label class="form-check-label" for="kuliner{{ $kuliner->id }}">
                                            <h5 class="card-header fw-bold">{{ $kuliner->nama }}</h5>
                                            <hr>
                                            <small>Deskripsi:</small>
                                            <p class="card-text">{{ $kuliner->deskripsi }}</p>
                                            <small>Harga:</small>
                                            <p class="card-text">Rp {{ $kuliner->harga }}</p>
                                        </label>
                                    </div>
                                </div>
                                @endforeach
                            </div>

                             <!-- Paket Homestay -->
                            <div class="row border rounded p-4 mb-3">
                                <label for="paket-kuliner" class="form-label fw-bold">Paket Kuliner</label>
                                @foreach ($homestays as $homestay)
                                <div class="col-3 border p-3 m-3">
                                    <div class="form-check">
                                        <input class="form-check-input" value="{{ $homestay->id }}" type="radio" name="homestay" id="homestay{{ $homestay->id }}" @if ($loop->first) checked @endif>
                                        <label class="form-check-label" for="homestay{{ $homestay->id }}">
                                            <h5 class="card-header fw-bold">{{ $homestay->nama }}</h5>
                                            <hr>
                                            <small>Deskripsi:</small>
                                            <p class="card-text">{{ $homestay->deskripsi }}</p>
                                            <small>Harga:</small>
                                            <p class="card-text">Rp {{ $homestay->harga }}</p>
                                        </label>
                                    </div>
                                </div>
                                @endforeach
                            </div>

                            <!-- Paket Homestay -->
                            <div class="row border rounded p-4 mb-3">
                                <label for="paket-kuliner" class="form-label fw-bold">Paket Kuliner</label>
                                @foreach ($studiBandings as $studiBanding)
                                <div class="col-3 border p-3 m-3">
                                    <div class="form-check">
                                        <input class="form-check-input" value="{{ $studiBanding->id }}" type="radio" name="studiBanding" id="studiBanding{{ $studiBanding->id }}" @if ($loop->first) checked @endif>
                                        <label class="form-check-label" for="studiBanding{{ $studiBanding->id }}">
                                            <h5 class="card-header fw-bold">{{ $studiBanding->nama }}</h5>
                                            <hr>
                                            <small>Deskripsi:</small>
                                            <p class="card-text">{{ $studiBanding->deskripsi }}</p>
                                            <small>Harga:</small>
                                            <p class="card-text">Rp {{ $studiBanding->harga }}</p>
                                        </label>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                                {{-- <button type="submit" class="btn btn-primary" onclick="tambahBooking(event)">Submit</button> --}}
                                <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
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
                events: [
                    @foreach ($bookings as $booking)
                    {
                        title: '{{ $booking->organisasi }}',
                        start: '{{ $booking->tanggal }}T{{ $booking->jam_mulai }}',
                        end: '{{ $booking->tanggal }}T{{ $booking->jam_selesai }}',
                        extendedProps: {
                            nama_pic: '{{ $booking->nama_pic }}',
                            noTelpPIC: '{{ $booking->noTelpPIC }}',
                            visitor: '{{ $booking->visitor }}',
                            paket_id: '{{ $booking->paket_id }}',
                            tagihan: '{{ $booking->tagihan }}',
                            guide_id: '{{ $booking->guide_id }}',
                            status: '{{ $booking->status }}',
                        }
                    },
                    @endforeach
                ],
                eventClick: function(info) {
                // Prevent the browser from following the URL
                info.jsEvent.preventDefault();

                // Extract data from the event
                var event = info.event;
                var eventData = {
                    nama_pic: event.extendedProps.nama_pic,
                    organisasi: event.title,
                    noTelpPIC: event.extendedProps.noTelpPIC,
                    visitor: event.extendedProps.visitor,
                    tanggal: event.startStr,
                    jam_mulai: event.extendedProps.jam_mulai,
                    jam_selesai: event.extendedProps.jam_selesai,
                    paket_id: event.extendedProps.paket_id,
                    tagihan: event.extendedProps.tagihan,
                    guide_id: event.extendedProps.guide_id,
                    status: event.extendedProps.status
                };

                // Update the modal's content
                var modalBody = document.getElementById('modalBody');
                modalBody.innerHTML = `
                    <p><strong>PIC : </strong> ${eventData.nama_pic}</p>
                    <p><strong>Organisasi : </strong> ${eventData.organisasi}</p>
                    <p><strong>No. Telp PIC : </strong> ${eventData.noTelpPIC}</p>
                    <p><strong>Visitor : </strong> ${eventData.visitor}</p>
                    <p><strong>Tanggal : </strong> ${eventData.tanggal}</p>
                    <p><strong>Jam Mulai : </strong> ${eventData.jam_mulai}</p>
                    <p><strong>Jam Selesai : </strong> ${eventData.jam_selesai}</p>
                    <p><strong>Paket ID : </strong> ${eventData.paket_id}</p>
                    <p><strong>Tagihan : </strong> ${eventData.tagihan}</p>
                    <p><strong>Guide ID : </strong> ${eventData.guide_id}</p>
                    <p><strong>Status : </strong> ${eventData.status}</p>
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

</script>

@endsection