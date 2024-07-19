var progresBar = document.getElementsByClassName("progresBar");
var kirimData = document.getElementById("kirim-data");
console.log(progresBar);
var pageSlide = 0;
var dataDiri = document.getElementById("dataDiri");
var paketWisata = document.getElementById("paketWisata");
var studiBanding = document.getElementById("studi-banding");
var batik = document.getElementById("batik");
var kesenian = document.getElementById("kesenian");
var cocokTanam = document.getElementById("cocok-tanam");
var permainan = document.getElementById("permainan");
var kuliner = document.getElementById("kuliner");
var homestay = document.getElementById("homestay");




function batal() {
    pageSlide = 0;

    for (var i = 7; i > pageSlide; i--) {
        progresBar[i].setAttribute("class", "box mb-1 progresBar");
    }

    if (pageSlide === 0) {
        dataDiri.style.display = "block";
        paketWisata.style.display = "none";
        studiBanding.style.display = "none";
        batik.style.display = "none";
        kesenian.style.display = "none";
        cocokTanam.style.display = "none";
        permainan.style.display = "none";
        kuliner.style.display = "none";
        homestay.style.display = "none";
        kirimData.style.display = "none";
    }

    if (pageSlide === 1) {
        dataDiri.style.display = "none";
        paketWisata.style.display = "block";
        studiBanding.style.display = "block";
        batik.style.display = "none";
        kesenian.style.display = "none";
        cocokTanam.style.display = "none";
        permainan.style.display = "none";
        kuliner.style.display = "none";
        homestay.style.display = "none";
    }

    if (pageSlide === 2) {
        dataDiri.style.display = "none";
        paketWisata.style.display = "block";
        studiBanding.style.display = "none";
        batik.style.display = "block";
        kesenian.style.display = "none";
        cocokTanam.style.display = "none";
        permainan.style.display = "none";
        kuliner.style.display = "none";
        homestay.style.display = "none";
    }

    if (pageSlide === 3) {
        dataDiri.style.display = "none";
        paketWisata.style.display = "block";
        studiBanding.style.display = "none";
        batik.style.display = "none";
        kesenian.style.display = "block";
        cocokTanam.style.display = "none";
        permainan.style.display = "none";
        kuliner.style.display = "none";
        homestay.style.display = "none";
    }

    if (pageSlide === 4) {
        dataDiri.style.display = "none";
        paketWisata.style.display = "block";
        studiBanding.style.display = "none";
        batik.style.display = "none";
        kesenian.style.display = "none";
        cocokTanam.style.display = "block";
        permainan.style.display = "none";
        kuliner.style.display = "none";
        homestay.style.display = "none";
    }

    if (pageSlide === 5) {
        dataDiri.style.display = "none";
        paketWisata.style.display = "block";
        studiBanding.style.display = "none";
        batik.style.display = "none";
        kesenian.style.display = "none";
        cocokTanam.style.display = "none";
        permainan.style.display = "block";
        kuliner.style.display = "none";
        homestay.style.display = "none";
    }

    if (pageSlide === 6) {
        dataDiri.style.display = "none";
        paketWisata.style.display = "block";
        studiBanding.style.display = "none";
        batik.style.display = "none";
        kesenian.style.display = "none";
        cocokTanam.style.display = "none";
        permainan.style.display = "none";
        kuliner.style.display = "block";
        homestay.style.display = "none";
    }

    if (pageSlide === 7) {
        dataDiri.style.display = "none";
        paketWisata.style.display = "block";
        studiBanding.style.display = "none";
        batik.style.display = "none";
        kesenian.style.display = "none";
        cocokTanam.style.display = "none";
        permainan.style.display = "none";
        kuliner.style.display = "none";
        homestay.style.display = "block";
    }
}

function selanjutnya() {
    var tanggalBookingValue = document.getElementById("tanggal-booking").value;
    var namaPembookingValue = document.getElementById("nama-pembooking").value;
    var organisasiValue = document.getElementById("organisasi").value;
    var noTelpPicValue = document.getElementById("no-telp-pic").value;
    var jamBookingMulaiValue =
        document.getElementById("jam-booking-mulai").value;

    var jumlahVisitorValue = document.getElementById("jumlah-visitor").value;
    if (
        tanggalBookingValue.trim() === "" ||
        namaPembookingValue.trim() === "" ||
        organisasiValue.trim() === "" ||
        noTelpPicValue.trim() === "" ||
        jamBookingMulaiValue.trim() === "" ||
        jumlahVisitorValue.trim() === ""
    ) {
        alert("Lengkapi Seluruh Data Diri untuk Melanjutkan Booking!");
    } else {
        if (pageSlide >= 0 && pageSlide < 7) {
            pageSlide++;
            for (var i = 0; i <= pageSlide; i++) {
                progresBar[i].setAttribute(
                    "class",
                    "box-active mb-1 progresBar"
                );
            }
        }

        if (pageSlide === 0) {
            dataDiri.style.display = "block";
            paketWisata.style.display = "none";
            studiBanding.style.display = "none";
            batik.style.display = "none";
            kesenian.style.display = "none";
            cocokTanam.style.display = "none";
            permainan.style.display = "none";
            kuliner.style.display = "none";
            homestay.style.display = "none";
            kirimData.style.display = "none";
        }

        if (pageSlide === 1) {
            dataDiri.style.display = "none";
            paketWisata.style.display = "block";
            studiBanding.style.display = "block";
            batik.style.display = "none";
            kesenian.style.display = "none";
            cocokTanam.style.display = "none";
            permainan.style.display = "none";
            kuliner.style.display = "none";
            homestay.style.display = "none";
            kirimData.style.display = "none";
        }

        if (pageSlide === 2) {
            dataDiri.style.display = "none";
            paketWisata.style.display = "block";
            studiBanding.style.display = "none";
            batik.style.display = "block";
            kesenian.style.display = "none";
            cocokTanam.style.display = "none";
            permainan.style.display = "none";
            kuliner.style.display = "none";
            homestay.style.display = "none";
            kirimData.style.display = "none";
        }

        if (pageSlide === 3) {
            dataDiri.style.display = "none";
            paketWisata.style.display = "block";
            studiBanding.style.display = "none";
            batik.style.display = "none";
            kesenian.style.display = "block";
            cocokTanam.style.display = "none";
            permainan.style.display = "none";
            kuliner.style.display = "none";
            homestay.style.display = "none";
            kirimData.style.display = "none";
        }

        if (pageSlide === 4) {
            dataDiri.style.display = "none";
            paketWisata.style.display = "block";
            studiBanding.style.display = "none";
            batik.style.display = "none";
            kesenian.style.display = "none";
            cocokTanam.style.display = "block";
            permainan.style.display = "none";
            kuliner.style.display = "none";
            homestay.style.display = "none";
            kirimData.style.display = "none";
        }

        if (pageSlide === 5) {
            dataDiri.style.display = "none";
            paketWisata.style.display = "block";
            studiBanding.style.display = "none";
            batik.style.display = "none";
            kesenian.style.display = "none";
            cocokTanam.style.display = "none";
            permainan.style.display = "block";
            kuliner.style.display = "none";
            homestay.style.display = "none";
            kirimData.style.display = "none";
        }

        if (pageSlide === 6) {
            dataDiri.style.display = "none";
            paketWisata.style.display = "block";
            studiBanding.style.display = "none";
            batik.style.display = "none";
            kesenian.style.display = "none";
            cocokTanam.style.display = "none";
            permainan.style.display = "none";
            kuliner.style.display = "block";
            homestay.style.display = "none";
            kirimData.style.display = "none";
        }

        if (pageSlide === 7) {
            dataDiri.style.display = "none";
            paketWisata.style.display = "block";
            studiBanding.style.display = "none";
            batik.style.display = "none";
            kesenian.style.display = "none";
            cocokTanam.style.display = "none";
            permainan.style.display = "none";
            kuliner.style.display = "none";
            homestay.style.display = "block";
            kirimData.style.display = "block";
        }
    }

}

function sebelumnya() {
    if (pageSlide > 0 && pageSlide <= 7) {
        pageSlide--;

        for (var i = 7; i > pageSlide; i--) {
            progresBar[i].setAttribute("class", "box mb-1 progresBar");
        }
    }

    if (pageSlide === 0) {
        dataDiri.style.display = "block";
        paketWisata.style.display = "none";
        studiBanding.style.display = "none";
        batik.style.display = "none";
        kesenian.style.display = "none";
        cocokTanam.style.display = "none";
        permainan.style.display = "none";
        kuliner.style.display = "none";
        homestay.style.display = "none";
        kirimData.style.display = "none";
    }

    if (pageSlide === 1) {
        dataDiri.style.display = "none";
        paketWisata.style.display = "block";
        studiBanding.style.display = "block";
        batik.style.display = "none";
        kesenian.style.display = "none";
        cocokTanam.style.display = "none";
        permainan.style.display = "none";
        kuliner.style.display = "none";
        homestay.style.display = "none";
        kirimData.style.display = "none";
    }

    if (pageSlide === 2) {
        dataDiri.style.display = "none";
        paketWisata.style.display = "block";
        studiBanding.style.display = "none";
        batik.style.display = "block";
        kesenian.style.display = "none";
        cocokTanam.style.display = "none";
        permainan.style.display = "none";
        kuliner.style.display = "none";
        homestay.style.display = "none";
        kirimData.style.display = "none";
    }

    if (pageSlide === 3) {
        dataDiri.style.display = "none";
        paketWisata.style.display = "block";
        studiBanding.style.display = "none";
        batik.style.display = "none";
        kesenian.style.display = "block";
        cocokTanam.style.display = "none";
        permainan.style.display = "none";
        kuliner.style.display = "none";
        homestay.style.display = "none";
        kirimData.style.display = "none";
    }

    if (pageSlide === 4) {
        dataDiri.style.display = "none";
        paketWisata.style.display = "block";
        studiBanding.style.display = "none";
        batik.style.display = "none";
        kesenian.style.display = "none";
        cocokTanam.style.display = "block";
        permainan.style.display = "none";
        kuliner.style.display = "none";
        homestay.style.display = "none";
        kirimData.style.display = "none";
    }

    if (pageSlide === 5) {
        dataDiri.style.display = "none";
        paketWisata.style.display = "block";
        studiBanding.style.display = "none";
        batik.style.display = "none";
        kesenian.style.display = "none";
        cocokTanam.style.display = "none";
        permainan.style.display = "block";
        kuliner.style.display = "none";
        homestay.style.display = "none";
        kirimData.style.display = "none";
    }

    if (pageSlide === 6) {
        dataDiri.style.display = "none";
        paketWisata.style.display = "block";
        studiBanding.style.display = "none";
        batik.style.display = "none";
        kesenian.style.display = "none";
        cocokTanam.style.display = "none";
        permainan.style.display = "none";
        kuliner.style.display = "block";
        homestay.style.display = "none";
        kirimData.style.display = "none";
    }

    if (pageSlide === 7) {
        dataDiri.style.display = "none";
        paketWisata.style.display = "block";
        studiBanding.style.display = "none";
        batik.style.display = "none";
        kesenian.style.display = "none";
        cocokTanam.style.display = "none";
        permainan.style.display = "none";
        kuliner.style.display = "none";
        homestay.style.display = "block";
        kirimData.style.display = "block";
    }
}

function progress(data) {
    var tanggalBookingValue = document.getElementById("tanggal-booking").value;
    var namaPembookingValue = document.getElementById("nama-pembooking").value;
    var organisasiValue = document.getElementById("organisasi").value;
    var noTelpPicValue = document.getElementById("no-telp-pic").value;
    var jamBookingMulaiValue =
        document.getElementById("jam-booking-mulai").value;

    var jumlahVisitorValue = document.getElementById("jumlah-visitor").value;
    if (
        tanggalBookingValue.trim() === "" ||
        namaPembookingValue.trim() === "" ||
        organisasiValue.trim() === "" ||
        noTelpPicValue.trim() === "" ||
        jamBookingMulaiValue.trim() === "" ||
        jumlahVisitorValue.trim() === ""
    ) {
        alert("Lengkapi Seluruh Data Diri untuk Melanjutkan Booking!");
    } else {
        pageSlide = data;

        for (var j = 0; j <= pageSlide; j++) {
            progresBar[j].setAttribute("class", "box-active mb-1 progresBar");
        }

        for (var i = 7; i > pageSlide; i--) {
            progresBar[i].setAttribute("class", "box mb-1 progresBar");
            progresBar[i].setAttribute("class", "box mb-1 progresBar");
        }

        if (pageSlide === 0) {
            dataDiri.style.display = "block";
            paketWisata.style.display = "none";
            studiBanding.style.display = "none";
            batik.style.display = "none";
            kesenian.style.display = "none";
            cocokTanam.style.display = "none";
            permainan.style.display = "none";
            kuliner.style.display = "none";
            homestay.style.display = "none";
            kirimData.style.display = "none";
        }

        if (pageSlide === 1) {
            dataDiri.style.display = "none";
            paketWisata.style.display = "block";
            studiBanding.style.display = "block";
            batik.style.display = "none";
            kesenian.style.display = "none";
            cocokTanam.style.display = "none";
            permainan.style.display = "none";
            kuliner.style.display = "none";
            homestay.style.display = "none";
            kirimData.style.display = "none";
        }

        if (pageSlide === 2) {
            dataDiri.style.display = "none";
            paketWisata.style.display = "block";
            studiBanding.style.display = "none";
            batik.style.display = "block";
            kesenian.style.display = "none";
            cocokTanam.style.display = "none";
            permainan.style.display = "none";
            kuliner.style.display = "none";
            homestay.style.display = "none";
            kirimData.style.display = "none";
        }

        if (pageSlide === 3) {
            dataDiri.style.display = "none";
            paketWisata.style.display = "block";
            studiBanding.style.display = "none";
            batik.style.display = "none";
            kesenian.style.display = "block";
            cocokTanam.style.display = "none";
            permainan.style.display = "none";
            kuliner.style.display = "none";
            homestay.style.display = "none";
            kirimData.style.display = "none";
        }

        if (pageSlide === 4) {
            dataDiri.style.display = "none";
            paketWisata.style.display = "block";
            studiBanding.style.display = "none";
            batik.style.display = "none";
            kesenian.style.display = "none";
            cocokTanam.style.display = "block";
            permainan.style.display = "none";
            kuliner.style.display = "none";
            homestay.style.display = "none";
            kirimData.style.display = "none";
        }

        if (pageSlide === 5) {
            dataDiri.style.display = "none";
            paketWisata.style.display = "block";
            studiBanding.style.display = "none";
            batik.style.display = "none";
            kesenian.style.display = "none";
            cocokTanam.style.display = "none";
            permainan.style.display = "block";
            kuliner.style.display = "none";
            homestay.style.display = "none";
            kirimData.style.display = "none";
        }

        if (pageSlide === 6) {
            dataDiri.style.display = "none";
            paketWisata.style.display = "block";
            studiBanding.style.display = "none";
            batik.style.display = "none";
            kesenian.style.display = "none";
            cocokTanam.style.display = "none";
            permainan.style.display = "none";
            kuliner.style.display = "block";
            homestay.style.display = "none";
            kirimData.style.display = "none";
        }

        if (pageSlide === 7) {
            dataDiri.style.display = "none";
            paketWisata.style.display = "block";
            studiBanding.style.display = "none";
            batik.style.display = "none";
            kesenian.style.display = "none";
            cocokTanam.style.display = "none";
            permainan.style.display = "none";
            kuliner.style.display = "none";
            homestay.style.display = "block";
            kirimData.style.display = "block";
        }
    }
}
