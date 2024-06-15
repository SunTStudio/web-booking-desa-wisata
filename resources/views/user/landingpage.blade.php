@extends('user.layout')

@section('title', 'Booking Tanggal Visit')

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
                <form method="GET" action="">
                    <div class="mb-3">
                        <label for="tanggal-booking" class="form-label">Tanggal Visitor</label>
                        <input type="text" class="form-control" name="tanggal-booking" id="tanggal-booking" placeholder="Masukan tanggal YYYY-MM-DD">
                    </div>
                    <div class="mb-3">
                        <label for="nama-pembooking" class="form-label">Nama Pembooking</label>
                        <input type="text" class="form-control" name="nama-booking" placeholder="Masukan Nama" id="nama-pembooking">
                    </div>
                    <div class="mb-3">
                        <label for="no-telp-pic" class="mb-2">No. Telp PIC</label>
                        <input type="text" placeholder="Masukan No. Telp" class="form-control" name="no-telp-pic" id="no-telp-pic">
                    </div>
                    <div class="mb-3">
                        <label for="jam-booking-mulai" class="form-label">Jam Booking Mulai</label>
                        <input type="time" class="form-control" name="jam-booking-mulai" id="jam-booking-mulai">
                    </div>
                    <div class="mb-3">
                        <label for="jam-booking-selesai" class="form-label">Jam Booking Selesai</label>
                        <input type="time" class="form-control" name="jam-booking-selesai" id="jam-booking-selesai">
                    </div>
                    <div class="mb-3">
                        <label for="jumlah-visitor" class="mb-2">Jumlah Visitor</label>
                        <input type="text" placeholder="Masukan Jumlah Visitor" class="form-control" name="jumlah-visitor" id="jumlah-visitor">
                    </div>
                    <button type="submit" class="btn btn-primary" onclick="tambahBooking(event)">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal End -->
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


</body>

</html>