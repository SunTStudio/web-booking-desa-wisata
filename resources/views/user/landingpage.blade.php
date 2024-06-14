@extends('user.layout')

@section('title', 'Booking Tanggal Visit')

@section('css')
<link href="https://cdn.jsdelivr.net/npm/@fullcalendar/core/main.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/@fullcalendar/timegrid/main.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="/css/landingpage.css">
@endsection

@section('konten')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">

            <!-- Navbar End -->
            <!-- Hero Start -->
            <section class="hero rounded">
                <div class="konten px-5">
                    <h1>Desa Wisata Krebet</h1>
                    <h3>Enjoy Naturally Artistic Experience</h3>
                </div>
            </section>
        </div>
        <!-- Navbar Start -->
        <!-- Hero End -->
        <!-- Calendar Start -->
        <div class="col-lg-10 col-sm-12 mb-4">
            <section class="pemesanan">
                <h2 class="text-center mb-5 rounded py-2">Pemesanan Tanggal</h2>
                <div height="20">
                    <div id='calendar'></div>
                </div>
            </section>
        </div>

        <div class="row justify-content-center m-lg-1 m-1 mt-5">
            <div class="col bg-white p-lg-1 p-2 rounded text-center">
                <button class="btn btn-primary mb-3 w-80" data-bs-toggle="modal" data-bs-target="#tambahModal">Booking Tanggal Sekarang</button>
            </div>
        </div>
        <!-- Calendar End -->
    </div>

</div>
<!-- Modal Start -->
<div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Booking</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="#">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tanggal Visitor</label>
                        <input type="text" class="form-control" name="tanggal-booking" id="tanggal-booking" aria-describedby="emailHelp" placeholder="Masukan tanggal YYYY-MM-DD">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama PIC</label>
                        <input type="text" class="form-control" name="nama-booking" id="nama-pembooking" aria-describedby="emailHelp" placeholder="Masukan Nama">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">No. Telp PIC</label>
                        <input type="text" class="form-control" name="no-telp-booking" id="no-telp-pembooking" aria-describedby="emailHelp" placeholder="Masukan No. Telp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Jam Mulai</label>
                        <input type="text" class="form-control" name="jam-booking-mulai" id="jam-booking-mulai" aria-describedby="emailHelp" placeholder="Masukan Jam Mulai">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Jam Selesai</label>
                        <input type="text" class="form-control" name="jam-booking-selesai" id="jam-booking-selesai" aria-describedby="emailHelp" placeholder="Masukan Jam Selesai">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Jumlah Visitor</label>
                        <input type="text" placeholder="Masukan Jumlah Visitor" class="form-control">
                    </div>
                    <button type="submit" data-bs-dismiss="modal" class="btn btn-primary" onclick="tambahBooking()">Booking Tanggal</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal End -->
@endsection

@section('script')

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
                        title: 'Event Satu',
                        start: '2024-06-01T10:00:00',
                        end: '2024-06-01T12:00:00'
                    },
                    {
                        title: 'Event Dua',
                        start: '2024-06-07T14:00:00',
                        end: '2024-06-07T16:00:00'
                    },
                    {
                        title: 'Event Tiga',
                        start: '2024-06-09T09:00:00',
                        end: '2024-06-09T10:00:00'
                    }
                ]
            });

            calendar.render();
        } else {
            console.error("Element with id 'calendar' not found.");
        }
    });

    function tambahBooking() {
        var name = document.getElementById('nama-pembooking').value;
        var telp = document.getElementById('no-telp-pembooking').value;
        var tanggal = document.getElementById('tanggal-booking').value;
        var jamMulai = document.getElementById('jam-booking-mulai').value;
        var jamSelesai = document.getElementById('jam-booking-selesai').value;

        if (name && telp && tanggal && jamMulai && jamSelesai) {
            var event = {
                title: `${name}`,
                start: `${tanggal}T${jamMulai}:00`,
                end: `${tanggal}T${jamSelesai}:00`,
                allDay: false
            };
            calendar.addEvent(event);
        } else {
            alert("Please fill in all fields");
        }
    }
</script>
@endsection


</body>

</html>