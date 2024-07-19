// Validasi visitor
function validateVisitorCount() {
    var visitor = document.getElementById("jumlah-visitor");
    var visitorValue = visitor.value;
    // console.log(arr_email);
    if (visitorValue < 1) {
        alert("Visitor harus lebih dari 0 !!");
        visitor.value = "";
    } else {
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

// var waktu = document.getElementsByClassName("batik");
// var waktuValue = waktu.getAttribute('alt');
// console.log(waktuValue);
// Output the value of the 'alt' attribute

// Pengambilan data angka untuk jam per produk
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

// !! Pengihitungan Jam Booking Akhir
function waktuAkhir() {
    var waktuAwal = document.getElementById("jam-booking-mulai");
    // console.log(waktuAwal.value)
    var waktuAwalValue = waktuAwal.value;
    // console.log(waktuAwal.value);
    var waktuAwalSplit = waktuAwalValue.split(":");
    var awalJam = parseInt(waktuAwalSplit[0], 10);
    var awalMenit = parseInt(waktuAwalSplit[1], 10);
    // var awalWaktu = 11;
    // var tambah = 2;
    // console.log(awalJam);
    // console.log(awalMenit);
    // console.log(wBatik + wCocokTanam + wHomestay + wKesenian + wKuliner + wPermainan + wStudy + awalJam + awalMenit);
    var totalWaktu =
        (wBatik +
            wCocokTanam +
            wHomestay +
            wKesenian +
            wKuliner +
            wPermainan +
            wStudy +
            awalJam) %
        24;
    // Calculate the total time in hours and use modulo 24 to wrap around if it exceeds 24 hours
    // var totalWaktu = (awalWaktu + tambah) % 24;

    // Format the result as "HH:MM"
    var totalWaktuFormatted =
        totalWaktu.toString().padStart(2, "0") +
        ":" +
        awalMenit.toString().padStart(2, "0");
    // totalWaktuFormatted += waktuAwal;
    // console.log(totalWaktuFormatted); // Output the formatted time
    var formWaktuAkhir = document.getElementById("jam-booking-selesai");
    // console.log(formWaktuAkhir.value);
    formWaktuAkhir.setAttribute("value", totalWaktuFormatted);
    // console.log(formWaktuAkhir.value);

    // Mengambil nilai dari elemen input
    const tanggalBookingValue =
        document.getElementById("tanggal-booking").value;
    const namaPembookingValue =
        document.getElementById("nama-pembooking").value;
    const organisasiValue = document.getElementById("organisasi").value;
    const noTelpPicValue = document.getElementById("no-telp-pic").value;
    const jamBookingMulaiValue =
        document.getElementById("jam-booking-mulai").value;
    const jamBookingSelesaiValue = document.getElementById(
        "jam-booking-selesai"
    ).value;
    const jumlahVisitorValue = document.getElementById("jumlah-visitor").value;

    // Menampilkan nilai di elemen lain
    document.getElementById("nama-pembooking-display").innerText =
        namaPembookingValue;
    document.getElementById("organisasi-display").innerText = organisasiValue;
    document.getElementById("visitor-display").innerText = jumlahVisitorValue;
    document.getElementById("tanggal-display").innerText = tanggalBookingValue;
    document.getElementById("jam-mulai-display").innerText =
        jamBookingMulaiValue;
    document.getElementById("jam-selesai-display").innerText =
        jamBookingSelesaiValue;

    // Menampilkan status dengan nilai tetap
    document.getElementById("status-display").innerText = "Belum ACC";
}

// document.getElementById('jam-booking-mulai').addEventListener('input', function(event) {
//     let timeValue = event.target.value;
//     let [hours, minutes] = timeValue.split(':').map(Number);

//     if (hours < 8 || (hours >= 16 && minutes > 0)) {
//         event.target.setCustomValidity('Waktu harus antara 08:00 dan 16:00');
//     } else {
//         event.target.setCustomValidity('');
//     }
// });

// document.getElementById('jam-booking-mulai').addEventListener('focus', function(event) {
//     event.target.setAttribute('min', '08:00');
//     event.target.setAttribute('max', '16:00');
// });

// Ambil nilai dari input teks saat nilainya berubah
// document
//     .getElementById("nama-pembooking")
//     .addEventListener("input", function (event) {
//         var namaPicValue = event.target.value;
//         document.getElementById("nama-pembooking-hidden").value = namaPicValue; // Update nilai input hidden

//         // Tampilkan nilai di bagian yang diinginkan
//         document.getElementById("nama-pembooking-display").textContent =
//             namaPicValue;
//     });

// document
//     .getElementById("organisasi")
//     .addEventListener("input", function (event) {
//         var namaPicValue = event.target.value;
//         document.getElementById("organisasi-hidden").value = namaPicValue; // Update nilai input hidden

//         // Tampilkan nilai di bagian yang diinginkan
//         document.getElementById("organisasi-display").textContent =
//             namaPicValue;
//     });

// document
//     .getElementById("jumlah-visitor")
//     .addEventListener("input", function (event) {
//         var namaPicValue = event.target.value;
//         document.getElementById("visitor-hidden").value = namaPicValue; // Update nilai input hidden

//         // Tampilkan nilai di bagian yang diinginkan
//         document.getElementById("visitor-display").textContent = namaPicValue;
//     });

// document
//     .getElementById("tanggal-booking")
//     .addEventListener("input", function (event) {
//         var namaPicValue = event.target.value;
//         document.getElementById("tanggal-hidden").value = namaPicValue; // Update nilai input hidden

//         // Tampilkan nilai di bagian yang diinginkan
//         document.getElementById("tanggal-display").textContent = namaPicValue;
//     });

// document
//     .getElementById("jam-booking-mulai")
//     .addEventListener("input", function (event) {
//         var namaPicValue = event.target.value;
//         document.getElementById("jam-mulai-hidden").value = namaPicValue; // Update nilai input hidden

//         // Tampilkan nilai di bagian yang diinginkan
//         document.getElementById("jam-mulai-display").textContent = namaPicValue;
//     });

// document
//     .getElementById("jam-booking-selesai")
//     .addEventListener("input", function (event) {
//         var namaPicValue = event.target.value;
//         document.getElementById("jam-selesai-hidden").value = namaPicValue; // Update nilai input hidden

//         // Tampilkan nilai di bagian yang diinginkan
//         document.getElementById("jam-selesai-display").textContent =
//             namaPicValue;
//     });

// Tambahkan event listener untuk form submit untuk menangkap data sebelum dikirim
// document.getElementById("myForm").addEventListener("submit", function (event) {
//     // Lakukan pengiriman form secara manual jika diperlukan
//     // this.submit(); // Uncomment jika ingin melanjutkan pengiriman form
// });
