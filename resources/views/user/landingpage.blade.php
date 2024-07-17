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
        <div class="row justify-content-center m-lg-1 m-1 ">
            <div class="col bg-white p-lg-1 p-2 rounded text-center">
                <button class="btn btn-primary mb-3 w-80" data-bs-toggle="modal" data-bs-target="#tambahModal">Booking Tanggal Sekarang</button>
            </div>
        </div>
        <div class="col-lg-10 col-sm-12 mb-4">
            <section class="pemesanan">
                <h2 class="text-center mb-5 rounded py-2">Pemesanan Tanggal</h2>
                <div height="20">
                    <div id='calendar'></div>
                </div>
            </section>
        </div>

        <!-- Calendar End -->
    </div>

</div>
<!-- Modal Start -->
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
                        <form method="GET" action="{{ route('user.bookingProses') }}">
                            <div class="mb-3">
                                <label for="tanggal-booking" class="form-label">Tanggal Visitor</label>
                                <input type="date" class="form-control" name="tanggal" id="tanggal-booking" placeholder="Masukan tanggal YYYY-MM-DD" value="" required>
                            </div>
                            <div class="mb-3">
                                <label for="nama-pembooking" class="form-label">Nama Pembooking</label>
                                <input type="text" class="form-control" name="nama_pic" id="nama-pembooking" value="" required>
                            </div>
                            <div class="mb-3">
                                <label for="nama-pembooking" class="form-label">Nama Organisasi</label>
                                <input type="text" class="form-control" name="organisasi" id="nama-pembooking" value="" required>
                            </div>
                            <div class="mb-3">
                                <label for="no-telp-pic" class="mb-2">No. Telp PIC</label>
                                <input type="text" placeholder="Masukan No. Telp" class="form-control" name="notelppic" id="no-telp-pic" value="" required>
                            </div>


                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label for="jam-booking-mulai" class="form-label">Jam Booking Mulai</label>
                            <input type="time" min="08:00" max="16:00" class="form-control" name="jam_mulai" id="jam-booking-mulai" value="" required onchange="waktuAwal()">
                        </div>
                        <div class="mb-3">
                            <label for="jam-booking-selesai" class="form-label">Jam Booking Selesai</label>
                            <input type="hidden" class="form-control" name="jam_selesai" id="jam-booking-selesai" value="" required>
                        </div>
                        <div class="mb-3">
                            <label for="jumlah-visitor" class="mb-2">Jumlah Visitor</label>
                            <input type="text" onchange="validateVisitorCount()" placeholder="Masukan Jumlah Visitor" class="form-control" name="visitor" id="jumlah-visitor" value="" required>
                        </div>

                    </div>

                    <h5 class="fw-bold m-3 mt-5">Pilih Paket-Paket Desa Wisata</h5>
                    <div class="row justify-content-center m-3">
                        <div class="col">
                            <!-- Paket Homestay -->
                            <div class="row border rounded p-4 mb-3">
                                <label for="paket-kuliner" class="form-label fw-bold">Paket Study Banding</label>
                                @foreach ($studiBandings as $studiBanding)
                                <div class="col-lg-3 col border p-3 m-3">
                                    <div class="form-check">
                                        <input class="form-check-input" value="{{ $studiBanding->id }}" type="radio" name="studiBanding" id="studiBanding{{ $studiBanding->id }}" @if ($loop->first) checked @endif @if (!$loop->first) onclick="waktuStudy(4)" @endif onclick="waktuStudy(0)" >
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
                                <hr class="mt-3">
                                <div class="col-lg-12">
                                    <div class="row p-3">
                                        <div class="col-lg-6 col">
                                            <p class="fw-medium h6">Keterangan Paket Study Banding :</p>
                                            <ul>
                                                <li>Mendapat Materi Desa Wisata Krebet</li>
                                                <li>Diskusi dan Tanya Jawab</li>
                                                <li>Melihat Proses Produksi dan Kerajinan</li>
                                                <li>Membatik Batik Paket III</li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-6 col">
                                            <p class="fw-medium h6">Fasilitas :</p>
                                            <ul>
                                                <li>Sertifikat</li>
                                                <li>Alat dan Bahan Membatik</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row border rounded p-4 mb-3">
                                <label for="paket-batik" class="form-label fw-bold">Paket Batik</label>
                                @foreach ($batiks as $batik)
                                <div class="col-lg-3 col border p-3 m-3">
                                    <div class="form-check">
                                        <input class="form-check-input batik" value="{{ $batik->id }}" type="radio" name="batik" id="batik{{ $batik->id }}" @if ($loop->first) checked @endif @if (!$loop->first) onclick="waktuBatik(2)" @endif onclick="waktuBatik(0)" >
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
                                <hr class="mt-3">
                                <div class="col-lg-12">
                                    <div class="row p-3">
                                        <div class="col-lg-6 col">
                                            <p class="fw-medium h6">Keterangan Paket Membatik :</p>
                                            <ul>
                                                <li>Hasil Karya Milik Peserta</li>
                                                <li>Minimal 10 orang</li>
                                                <li>Durasi 2 Jam</li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-6 col">
                                            <p class="fw-medium h6">Fasilitas :</p>
                                            <ul>
                                                <li>Sertifikat</li>
                                                <li>Alat dan Bahan Membatik</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="h-5">Hall0000o</div> -->
                            </div>

                            <!-- Paket Kesenian -->
                            <div class="row border rounded p-4 mb-3">
                                <label for="paket-kesenian" class="form-label fw-bold">Paket Kesenian Belajar (Rp40.000)</label>
                                @foreach ($kesenians as $kesenian)
                                <div class="col-lg-3 col border p-3 m-3">
                                    <div class="form-check">
                                        <input class="form-check-input kesenian" value="{{ $kesenian->id}}.belajar" type="radio" name="kesenian" id="kesenian{{ $kesenian->id }}" @if ($loop->first) checked @endif @if (!$loop->first) onclick="waktuKesenian(1)" @endif onclick="waktuKesenian(0)">
                                        <label class="form-check-label" for="kesenian{{ $kesenian->id }}">
                                            <h5 class="card-header fw-bold">{{ $kesenian->nama }}</h5>
                                            <hr>
                                            <small>Harga Belajar:</small>
                                            <p class="card-text">{{ $kesenian->harga_belajar }}</p>
                                        </label>
                                    </div>
                                </div>
                                @endforeach
                                <hr>
                                <label for="paket-kesenian" class="form-label fw-bold">Paket Kesenian Belajar dan Pementasan (Rp150.000)</label>
                                @foreach ($kesenians as $kesenian)
                                <div class="col-lg-3 col border p-3 m-3">
                                    <div class="form-check">
                                        <input class="form-check-input kesenian" value="{{ $kesenian->id }}.pementasan" type="radio" name="kesenian" id="kesenian2{{ $kesenian->id }}" @if ($loop->first) checked @endif @if (!$loop->first) onclick="waktuKesenian(2)" @endif onclick="waktuKesenian(0)">
                                        <label class="form-check-label" for="kesenian2{{ $kesenian->id }}">
                                            <h5 class="card-header fw-bold">{{ $kesenian->nama }}</h5>
                                            <hr>
                                            <small>Harga Pementasan:</small>
                                            <p class="card-text">Rp {{ $kesenian->harga_pementasan }}</p>
                                        </label>
                                    </div>
                                </div>
                                @endforeach
                                <hr class="mt-3">
                                <div class="col-lg-12">
                                    <div class="row p-3">
                                        <div class="col-lg-6 col">
                                            <p class="fw-medium h6">Keterangan Paket Kesenian :</p>
                                            <ul>
                                                <li>Biaya Belajar Rp 40.000/orang</li>
                                                <li>Biaya Belajar & Pementasan Rp 150.000/orang</li>
                                                <li>Minimal Peserta 10 orang</li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-6 col">
                                            <p class="fw-medium h6">Fasilitas :</p>
                                            <ul>
                                                <li>Foto Kegiatan</li>
                                                <li>Pakaian Tradisional dan Make Up</li>
                                                <li>Tempat Pertunjukan</li>
                                                <li>Air Minum Kemasan</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Paket Cocok Tanam -->
                            <div class="row border rounded p-4 mb-3">
                                <label for="paket-cocok-tanam" class="form-label fw-bold">Paket Cocok Tanam</label>
                                @foreach ($cocokTanams as $cocokTanam)
                                <div class="col-lg-3 col border p-3 m-3">
                                    <div class="form-check">
                                        <input class="form-check-input cocokTanam" value="{{ $cocokTanam->id }}" type="radio" name="cocokTanam" id="cocokTanam{{ $cocokTanam->id }}" @if ($loop->first) checked @endif @if (!$loop->first) onclick="waktuCocokTanam(1)" @endif onclick="waktuCocokTanam(0)">
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
                                <hr class="mt-3">
                                <div class="col-lg-12">
                                    <div class="row p-3">

                                        <div class="col">
                                            <p class="fw-medium h6">Fasilitas Paket Cocok Tanam :</p>
                                            <ul>
                                                <li>Bibit dan Alat dan Bahan-bahan</li>
                                                <li>Pendamping(Petani)</li>
                                                <li>Tanaman menjadi milik/hak pemilik lahan</li>
                                                <li>Air Minum Kemasan</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Paket Permainan -->
                            <div class="row border rounded p-4 mb-3">
                                <label for="paket-permainan" class="form-label fw-bold">Paket Permainan</label>
                                @foreach ($permainans as $permainan)
                                <div class="col-lg-3 col border p-3 m-3">
                                    <div class="form-check">
                                        <input class="form-check-input permainan" value="{{ $permainan->id }}" type="radio" name="permainan" id="permainan{{ $permainan->id }}" @if ($loop->first) checked @endif @if (!$loop->first) onclick="waktuPermainan(1)" @endif onclick="waktuPermainan(0)">
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
                                <hr class="mt-3">
                                <div class="col-lg-12">
                                    <div class="row p-3">

                                        <div class="col">
                                            <p class="fw-medium h6">Keterangan Paket Permainan :</p>
                                            <ul>
                                                <li>Area Permainan</li>
                                                <li>Alat dan Bahan Permainan</li>
                                                <li>Air Minum Kemasan</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Paket Kuliner -->
                            <div class="row border rounded p-4 mb-3">
                                <label for="paket-kuliner" class="form-label fw-bold">Paket Kuliner</label>
                                @foreach ($kuliners as $kuliner)
                                <div class="col-lg-3 col border p-3 m-3">
                                    <div class="form-check">
                                        <input class="form-check-input kuliner" value="{{ $kuliner->id }}" type="radio" name="kuliner" id="kuliner{{ $kuliner->id }}" @if ($loop->first) checked @endif @if (!$loop->first) onclick="waktuKuliner(1)" @endif onclick="waktuKuliner(0)">
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
                                <hr class="mt-3">
                                <div class="col-lg-12">
                                    <div class="row p-3">

                                        <div class="col">
                                            <p class="fw-medium h6">Keterangan Paket Kuliner :</p>
                                            <ul>
                                                <li>Paket Dhaharan minimal 25 pax</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Paket Homestay -->
                            <div class="row border rounded p-4 mb-3">
                                <label for="paket-kuliner" class="form-label fw-bold">Paket Homestay</label>
                                @foreach ($homestays as $homestay)
                                <div class="col-lg-3 col border p-3 m-3">
                                    <div class="form-check">
                                        <input class="form-check-input homestay" value="{{ $homestay->id }}" type="radio" name="homestay" id="homestay{{ $homestay->id }}" @if ($loop->first) checked @endif @if (!$loop->first) onclick="waktuHomestay(0)" @endif onclick="waktuHomestay(0)">
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
                                <hr class="mt-3">
                                <div class="col-lg-12">
                                    <div class="row p-3">
                                        <div class="col">
                                            <p class="fw-medium h6">Keterangan Paket Homestay :</p>
                                            <ul>
                                                <li>Satu Kamar untuk Dua Orang</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            {{-- <button type="submit" class="btn btn-primary" onclick="tambahBooking(event)">Submit</button> --}}
                            <a type="text" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#submitModal" onclick="waktuAkhir()">Booking Sekarang</a>
                            <button type="text" class="btn btn-warning mt-3" data-bs-dismiss="modal">Batal</button>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


<!-- Coba -->
<div class="modal fade" id="submitModal" tabindex="-1" role="dialog" aria-labelledby="submitModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-body" id="detailJam">
                <!-- Event information will be injected here -->

            </div>
            <div class="modal-footer">
                <button href="" type="submit" class="btn btn-warning mt-3">Submit</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
</form>
<!-- Modal End -->
<div class="modal fade" id="eventModal" tabindex="-1" role="dialog" aria-labelledby="eventModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

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
                initialView: 'dayGridMonth',
                selectable: true,
                locale: 'id',
                allDaySlot: false,
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'timeGridDay,timeGridWeek,dayGridMonth'
                },
                buttonText: {
                    today: 'Hari ini',
                    month: 'Bulan',
                    week: 'Minggu',
                    day: 'Hari'
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
                views: {
                    timeGridWeek: {
                        minTime: '08:00:00', // Set the start time for the timeGridWeek view
                        maxTime: '16:00:00' // Set the end time for the timeGridWeek view
                    },
                    timeGridDay: {
                        minTime: '08:00:00', // Set the start time for the timeGridDay view
                        maxTime: '16:00:00' // Set the end time for the timeGridDay view
                    }
                },
                events: [
                    @foreach($bookings as $booking) {
                        title: '{{ $booking->organisasi }}',
                        start: '{{ $booking->tanggal }}T{{ $booking->jam_mulai }}',
                        end: '{{ $booking->tanggal }}T{{ $booking->jam_selesai }}',
                        extendedProps: {
                            nama_pic: '{{ $booking->nama_pic }}',
                            noTelpPIC: '{{ $booking->noTelpPIC }}',
                            visitor: '{{ $booking->visitor }}',
                            jam_mulai: '{{ $booking->jam_mulai }}',
                            jam_selesai: '{{ $booking->jam_selesai }}',
                            paket_id: '{{ $booking->paket_id }}',
                            tagihan: '{{ $booking->tagihan }}',
                            guide_id: '{{ $booking->guide_id }}',
                            status: '{{ $booking->status }}',
                        },
                        backgroundColor: '{{ $booking->status === "Sudah ACC" ? "#5cb85c" : "#0275d8" }}', // Conditional color
                    },
                    @endforeach
                ],
                eventClick: function(info) {
                    // Prevent the browser from following the URL
                    info.jsEvent.preventDefault();

                    // Extract data from the eventinfo.jsEvent.preventDefault();
                    var options = {
                        year: 'numeric',
                        month: 'long',
                        day: 'numeric'
                    };
                    var event = info.event;
                    var eventData = {
                        nama_pic: event.extendedProps.nama_pic,
                        organisasi: event.title,
                        noTelpPIC: event.extendedProps.noTelpPIC,
                        visitor: event.extendedProps.visitor,
                        tanggal: event.start.toLocaleDateString('id-ID', options),
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
                        <div class="row justify-content-center">
                            <div class="col m-3 border rounded p-0">
                                <div class="bg-secondary rounded">
                                <p class="h5 fw-bold p-2 text-white">Status Booking</p>
                                </div>
                                <div class="ps-3 mb-3">
                                    <p class="mt-3">Nama Pembooking : <strong> ${eventData.nama_pic} </strong></p>
                                    <p>Organisasi :<strong> ${eventData.organisasi} </strong> </p>
                                    <p>Visitor :<strong> ${eventData.visitor} </strong> </p>
                                    <p>Tanggal :<strong> ${eventData.tanggal} </strong> </p>
                                    <p>Jam Mulai :<strong> ${eventData.jam_mulai} </strong> </p>
                                    <p>Jam Selesai :<strong> ${eventData.jam_selesai} </strong> </p>
                                    <p>Status : <button class="btn btn-secondary"> ${eventData.status} </button>  </p>
                                </div>
                                <hr>
                                <div class="cekStatus text-center p-3">
                                    <p class="fw-bold">Periksa Status Booking ini lebih lanjut dengan menghubungi nomer Admin berikut :</p>
                                    <a href="https://wa.me/6285868144268" class="btn btn-primary"><i class="fa-brands fa-whatsapp"></i> 08734348343 </a>
                                </div>
                            </div>
                        </div>
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
<script>
    function validateVisitorCount() {
        var visitor = document.getElementById("jumlah-visitor");
        var visitorValue = visitor.value;
        // console.log(arr_email);
        if (visitorValue < 1) {
            alert("Visitor harus lebih dari 0 !!");
            visitor.value = "";
        }else {

        }

        // if (visitorValue < 10) {
        //     var batik = document.getElementsByClassName("batik");

        //     for (let index = 0; index < batik.length; index++) {
        //         // const element = array[index];
        //         batik[index].disabled = true;
        //     }
        //     // console.log(batik[0]);
        // } else if (visitorValue > 10) {
        //     var batik = document.getElementsByClassName("batik");

        //     for (let index = 0; index < batik.length; index++) {
        //         // const element = array[index];
        //         batik[index].disabled = false;
        //     }
        // } else {

        // }

        // if (visitorValue < 10) {
        //     var kesenian = document.getElementsByClassName("kesenian");

        //     for (let index = 0; index < kesenian.length; index++) {
        //         // const element = array[index];
        //         kesenian[index].disabled = true;
        //     }
        //     // console.log(kesenian[0]);
        // } else if (visitorValue > 10) {
        //     var kesenian = document.getElementsByClassName("kesenian");

        //     for (let index = 0; index < kesenian.length; index++) {
        //         // const element = array[index];
        //         kesenian[index].disabled = false;
        //     }
        // } else {

        // }
        if (visitorValue < 10) {
            var cocokTanam = document.getElementsByClassName("cocokTanam");

            for (let index = 0; index < cocokTanam.length; index++) {
                // const element = array[index];
                cocokTanam[index].disabled = true;
            }
            // console.log(cocokTanam[0]);
        } else if (visitorValue > 10) {
            var cocokTanam = document.getElementsByClassName("cocokTanam");

            for (let index = 0; index < cocokTanam.length; index++) {
                // const element = array[index];
                cocokTanam[index].disabled = false;
            }
        } else {

        }
    }
</script>
<script>
    // var waktu = document.getElementsByClassName("batik");
    // var waktuValue = waktu.getAttribute('alt');
    // console.log(waktuValue); 
    // Output the value of the 'alt' attribute
    var wStudy = 0;
    var wBatik = 0;
    var wKesenian = 0;
    var wCocokTanam = 0;
    var wPermainan = 0;
    var wKuliner = 0;
    var wHomestay = 0;

    var semuaWaktu;

    function waktuStudy(data) {
        wStudy = data;
        console.log(wStudy);
    }

    function waktuBatik(data) {
        wBatik = data;
        console.log(wBatik);
    }

    function waktuKesenian(data) {
        wKesenian = data;
        console.log(wKesenian);
    }

    function waktuCocokTanam(data) {
        wCocokTanam = data;
        console.log(wCocokTanam);
    }

    function waktuPermainan(data) {
        wPermainan = data;
        console.log(wPermainan);
    }

    function waktuKuliner(data) {
        wKuliner = data;
        console.log(wKuliner);
    }

    function waktuHomestay(data) {
        wHomestay = data;
        console.log(wHomestay);

    }

    function waktuAkhir() {
        var waktuAwal = document.getElementById('jam-booking-mulai');
        var waktuAwalValue = waktuAwal.value;
        // console.log(waktuAwal.value);
        var waktuAwalSplit = waktuAwalValue.split(':');
        var awalJam = parseInt(waktuAwalSplit[0], 10);
        var awalMenit = parseInt(waktuAwalSplit[1], 10);
        // var awalWaktu = 11;
        // var tambah = 2;
        // console.log(awalJam);
        // console.log(awalMenit);
        // console.log(wBatik + wCocokTanam + wHomestay + wKesenian + wKuliner + wPermainan + wStudy + awalJam + awalMenit);
        var totalWaktu = (wBatik + wCocokTanam + wHomestay + wKesenian + wKuliner + wPermainan + wStudy + awalJam + awalMenit) % 24;
        // Calculate the total time in hours and use modulo 24 to wrap around if it exceeds 24 hours
        // var totalWaktu = (awalWaktu + tambah) % 24;

        // Format the result as "HH:MM"
        var totalWaktuFormatted = totalWaktu.toString().padStart(2, '0') + ":00";
        // totalWaktuFormatted += waktuAwal;
        // console.log(totalWaktuFormatted); // Output the formatted time
        var formWaktuAkhir = document.getElementById('jam-booking-selesai');
        formWaktuAkhir.setAttribute('value', totalWaktuFormatted);
    }
</script>
<!-- <script>
    document.getElementById('jam-booking-mulai').addEventListener('input', function(event) {
        let timeValue = event.target.value;
        let [hours, minutes] = timeValue.split(':').map(Number);

        if (hours < 8 || (hours >= 16 && minutes > 0)) {
            event.target.setCustomValidity('Waktu harus antara 08:00 dan 16:00');
        } else {
            event.target.setCustomValidity('');
        }
    });

    document.getElementById('jam-booking-mulai').addEventListener('focus', function(event) {
        event.target.setAttribute('min', '08:00');
        event.target.setAttribute('max', '16:00');
    });
</script> -->
@endsection


</body>

</html>