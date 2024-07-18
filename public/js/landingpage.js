$(document).ready(function () {
    var data;

    // Memanggil AJAX untuk mengambil data pertama kali
    fetchData();

    function fetchData() {
        $.ajax({
            url: "https://gist.githubusercontent.com/Yagamoo/ca3b1e232f57c3a9172029f64d01daf4/raw/1e971c95a1525cdad39f75f22a1ddc8076806f70/data.json",
            type: "GET",
            dataType: "json",
            success: function (response) {
                console.log(response);
                data = response;
                displayData(data);
            },
            error: function (xhr, status, error) {
                console.error("AJAX request error:", error);
            },
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

        var batik = $("#batik");
        var kesenian = $("#kesenian");
        var kesenian2 = $("#kesenian2");
        var cocokTanam = $("#cocokTanam");
        var permainan = $("#permainan");
        var kuliner = $("#kuliner");
        var homestay = $("#homestay");
        var studyBanding = $("#studyBanding");

        batik.empty(); // Kosongkan kontainer sebelum menambahkan data baru
        kesenian.empty();
        kesenian2.empty();
        cocokTanam.empty();
        permainan.empty();
        kuliner.empty();
        homestay.empty();
        studyBanding.empty();

        batikData.forEach((item, index) => {
            const isChecked = index === 0 ? "checked" : "";
            const dataCard = `<div class="col-3 border p-3 m-3">
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
            const isChecked = index === 0 ? "checked" : "";
            const dataCard = `<div class="col-3 border p-3 m-3">
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
            const isChecked = index === 0 ? "checked" : "";
            const dataCard = `<div class="col-3 border p-3 m-3">
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
            const isChecked = index === 0 ? "checked" : "";
            const dataCard = `<div class="col-3 border p-3 m-3">
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
            const isChecked = index === 0 ? "checked" : "";
            const dataCard = `<div class="col-3 border p-3 m-3">
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
            const isChecked = index === 0 ? "checked" : "";
            const dataCard = `<div class="col-3 border p-3 m-3">
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
            const isChecked = index === 0 ? "checked" : "";
            const dataCard = `<div class="col-3 border p-3 m-3">
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
            const isChecked = index === 0 ? "checked" : "";
            const dataCard = `<div class="col-3 border p-3 m-3">
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
