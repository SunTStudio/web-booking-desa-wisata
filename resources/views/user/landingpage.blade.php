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
                                <div id="batik" class="col-lg-12 d-flex flex-wrap">

                                </div>
                                <hr class="mt-3">
                                <div class="col-lg-12">
                                    <div class="row p-3">
                                        <div class="col-6">
                                            <p class="fw-medium h6">Keterangan Paket Membatik :</p>
                                            <ul>
                                                <li>Hasil Karya Milik Peserta</li>
                                                <li>Minimal 10 orang</li>
                                                <li>Durasi 2 Jam</li>
                                            </ul>
                                        </div>
                                        <div class="col-6">
                                            <p class="fw-medium h6">Fasilitas :</p>
                                            <ul>
                                                <li>Sertifikat</li>
                                                <li>Alat dan Bahan Membatik</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Paket Kesenian -->
                            <div class="row border rounded p-4 mb-3">
                                <label for="paket-kesenian" class="form-label fw-bold">Paket Kesenian Belajar (Rp40.000)</label>
                                <div id="kesenian" class="col-lg-12 d-flex flex-wrap">

                                </div>

                                <hr>
                                <label for="paket-kesenian" class="form-label fw-bold">Paket Kesenian Belajar dan Pementasan (Rp150.000)</label>
                                <div id="kesenian2" class="col-lg-12 d-flex flex-wrap">

                                </div>

                                <hr class="mt-3">
                                <div class="col-lg-12">
                                    <div class="row p-3">
                                        <div class="col-6">
                                            <p class="fw-medium h6">Keterangan Paket Kesenian :</p>
                                            <ul>
                                                <li>Biaya Belajar Rp 40.000/orang</li>
                                                <li>Biaya Belajar & Pementasan Rp 150.000/orang</li>
                                                <li>Minimal Peserta 10 orang</li>
                                            </ul>
                                        </div>
                                        <div class="col-6">
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
                                <div id="cocokTanam" class="col-lg-12 d-flex flex-wrap">

                                </div>
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
                                <div id="permainan" class="col-lg-12 d-flex flex-wrap">

                                </div>

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
                                <div id="kuliner" class="col-lg-12 d-flex flex-wrap">

                                </div>
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
                                <label for="paket-homestay" class="form-label fw-bold">Paket Homestay</label>
                                <div id="homestay" class="col-lg-12 d-flex flex-wrap">

                                </div>
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

                            <!-- Paket Study Banding -->
                            <div class="row border rounded p-4 mb-3">
                                <label for="paket-studi-banding" class="form-label fw-bold">Paket Study Banding</label>
                                <div id="studyBanding" class="col-lg-12 d-flex flex-wrap">

                                </div>
                                <hr class="mt-3">
                                <div class="col-lg-12">
                                    <div class="row p-3">
                                        <div class="col-6">
                                            <p class="fw-medium h6">Keterangan Paket Study Banding :</p>
                                            <ul>
                                                <li>Mendapat Materi Desa Wisata Krebet</li>
                                                <li>Diskusi dan Tanya Jawab</li>
                                                <li>Melihat Proses Produksi dan Kerajinan</li>
                                                <li>Membatik Batik Paket III</li>
                                            </ul>
                                        </div>
                                        <div class="col-6">
                                            <p class="fw-medium h6">Fasilitas :</p>
                                            <ul>
                                                <li>Sertifikat</li>
                                                <li>Alat dan Bahan Membatik</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- <button type="submit" class="btn btn-primary" onclick="tambahBooking(event)">Submit</button> --}}
                            <button type="submit" class="btn btn-primary">Booking Sekarang</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(document).ready(function() {
        var data;

        // Memanggil AJAX untuk mengambil data pertama kali
        fetchData();

        function fetchData() {
            $.ajax({
                url: 'https://gist.githubusercontent.com/Yagamoo/ca3b1e232f57c3a9172029f64d01daf4/raw/1e971c95a1525cdad39f75f22a1ddc8076806f70/data.json',
                type: 'GET',
                dataType: 'json',
                success: function(response) {
                    console.log(response);
                    data = response;
                    displayData(data);
                },
                error: function(xhr, status, error) {
                    console.error('AJAX request error:', error);
                }
            });
        }

        function displayData(data) {
            var batikData = data.batik;
            var kesenianData = data.kesenian;
            var cocokTanamData = data.cocokTanam;
            var permainanData = data.permainan;
            var kulinerData = data.kuliner;
            var homestayData = data.homestay;
            var studyBandingData = data.studyBanding;

            var batik = $('#batik');
            var kesenian = $('#kesenian');
            var kesenian2 = $('#kesenian2');
            var cocokTanam = $('#cocokTanam');
            var permainan = $('#permainan');
            var kuliner = $('#kuliner');
            var homestay = $('#homestay');
            var studyBanding = $('#studyBanding');

            batik.empty(); // Kosongkan kontainer sebelum menambahkan data baru
            kesenian.empty();
            kesenian2.empty();
            cocokTanam.empty();
            permainan.empty();
            kuliner.empty();
            homestay.empty();
            studyBanding.empty();

            batikData.forEach((item, index) => {
                const isChecked = index === 0 ? 'checked' : '';
                const dataCard =
                    `<div class="col-3 border p-3 m-3">
                        <div class="form-check">
                            <input class="form-check-input" value="${item.id}" type="radio" name="batik" id="batik${item.id}" ${isChecked}>
                            <label class="form-check-label" for="batik${item.id}">
                                <h5 class="card-header fw-bold">${item.nama}</h5>
                                <hr>
                                <small>Souvenir yang didapat:</small>
                                <p class="card-text">${item.deskripsi}</p>
                                <small>Harga Paket:</small>
                                <p class="card-text">Rp. ${item.harga}</p>
                            </label>
                        </div>
                    </div>`;
                batik.append(dataCard);
            });
            kesenianData.forEach((item, index) => {
                const isChecked = index === 0 ? 'checked' : '';
                const dataCard =
                    `<div class="col-3 border p-3 m-3">
                        <div class="form-check">
                            <input class="form-check-input" value="${item.id}.belajar" type="radio" name="kesenian" id="kesenian${item.id}" ${isChecked}>
                            <label class="form-check-label" for="kesenian${item.id}">
                                <h5 class="card-header fw-bold">${item.nama}</h5>
                                <hr>
                                    <small>Deskripsi:</small>
                                    <p class="card-text">${item.deskripsi}</p>
                                <small>Harga Belajar:</small>
                                <p class="card-text">Rp. ${item.harga_belajar}</p>
                            </label>
                        </div>
                    </div>`;
                kesenian.append(dataCard);
            });
            kesenianData.forEach((item, index) => {
                const isChecked = index === 0 ? 'checked' : '';
                const dataCard =
                    `<div class="col-3 border p-3 m-3">
                            <div class="form-check">
                                <input class="form-check-input" value="${item.id}.pementasan" type="radio" name="kesenian" id="kesenian2${item.id}" ${isChecked}>
                                <label class="form-check-label" for="kesenian2${item.id}">
                                    <h5 class="card-header fw-bold">${item.nama}</h5>
                                    <hr>
                                    <small>Deskripsi:</small>
                                    <p class="card-text">${item.deskripsi}</p>
                                    <small>Harga Pementasan:</small>
                                    <p class="card-text">Rp. ${item.harga_pementasan}</p>
                                </label>
                            </div>
                        </div>`;
                kesenian2.append(dataCard);
            });
            cocokTanamData.forEach((item, index) => {
                const isChecked = index === 0 ? 'checked' : '';
                const dataCard =
                    `<div class="col-3 border p-3 m-3">
                            <div class="form-check">
                                <input class="form-check-input" value="${item.id}" type="radio" name="cocokTanam" id="cocokTanam${item.id}" ${isChecked}>
                                <label class="form-check-label" for="cocokTanam${item.id}">
                                    <h5 class="card-header fw-bold">${item.nama}</h5>
                                    <hr>
                                    <small>Deskripsi:</small>
                                    <p class="card-text">${item.deskripsi}</p>
                                    <small>Harga Pementasan:</small>
                                    <p class="card-text">Rp. ${item.harga}</p>
                                </label>
                            </div>
                        </div>`;
                cocokTanam.append(dataCard);
            });
            permainanData.forEach((item, index) => {
                const isChecked = index === 0 ? 'checked' : '';
                const dataCard =
                    `<div class="col-3 border p-3 m-3">
                        <div class="form-check">
                            <input class="form-check-input" value="${item.id}" type="radio" name="permainan" id="permainan${item.id}" ${isChecked}>
                            <label class="form-check-label" for="permainan${item.id}">
                                <h5 class="card-header fw-bold">${item.nama}</h5>
                                <hr>
                                <small>Deskripsi:</small>
                                <p class="card-text">${item.deskripsi}</p>
                                <small>Harga:</small>
                                <p class="card-text">Rp ${item.harga}</p>
                            </label>
                        </div>
                    </div>`;
                permainan.append(dataCard);
            });
            kulinerData.forEach((item, index) => {
                const isChecked = index === 0 ? 'checked' : '';
                const dataCard =
                    `<div class="col-3 border p-3 m-3">
                        <div class="form-check">
                            <input class="form-check-input" value="${item.id}" type="radio" name="kuliner" id="kuliner${item.id}" ${isChecked}>
                            <label class="form-check-label" for="kuliner${item.id}">
                                <h5 class="card-header fw-bold">${item.nama}</h5>
                                <hr>
                                <small>Deskripsi:</small>
                                <p class="card-text">${item.deskripsi}</p>
                                <small>Harga:</small>
                                <p class="card-text">Rp ${item.harga}</p>
                            </label>
                        </div>
                    </div>`;
                kuliner.append(dataCard);
            });
            homestayData.forEach((item, index) => {
                const isChecked = index === 0 ? 'checked' : '';
                const dataCard =
                    `<div class="col-3 border p-3 m-3">
                        <div class="form-check">
                            <input class="form-check-input" value="${item.id}" type="radio" name="homestay" id="homestay${item.id}" ${isChecked}>
                            <label class="form-check-label" for="homestay${item.id}">
                                <h5 class="card-header fw-bold">${item.nama}</h5>
                                <hr>
                                <small>Deskripsi:</small>
                                <p class="card-text">${item.deskripsi}</p>
                                <small>Harga:</small>
                                <p class="card-text">Rp ${item.harga}</p>
                            </label>
                        </div>
                    </div>`;
                homestay.append(dataCard);
            });
            studyBandingData.forEach((item, index) => {
                const isChecked = index === 0 ? 'checked' : '';
                const dataCard =
                    `<div class="col-3 border p-3 m-3">
                        <div class="form-check">
                            <input class="form-check-input" value="${item.id}" type="radio" name="studiBanding" id="studiBanding${item.id}" ${isChecked}>
                            <label class="form-check-label" for="studiBanding${item.id}">
                                <h5 class="card-header fw-bold">${item.nama}</h5>
                                <hr>
                                <small>Deskripsi:</small>
                                <p class="card-text">${item.deskripsi}</p>
                                <small>Harga:</small>
                                <p class="card-text">Rp ${item.harga}</p>
                            </label>
                        </div>
                    </div>`;
                studyBanding.append(dataCard);
            });


        }
    });
</script>
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
                        }
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
@endsection


</body>

</html>