<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/@fullcalendar/core/main.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@fullcalendar/timegrid/main.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <!-- Bootstrap Timepicker CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-timepicker/0.5.2/css/bootstrap-timepicker.min.css">
    <link rel="stylesheet" href="/css/landingpage.css">

</head>

<body>
    <nav class="navbar bg-body-tertiary mb-5">
        <div class="container justify-content-sm-center justify-content-xl-between">
            <a class="navbar-brand" href="#">
                <img src="/asset/Logo_Desa_Krebet.png" alt="Bootstrap" height="70">
            </a>
            <form class="d-flex m-0" role="search">
                <input class="form-control me-2 p-0" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            <ul class="sosmed d-flex gap-2 m-0">
                <li class="shadow rounded d-flex align-items-center"><a href="https://www.facebook.com/profile.php?id=100078985543662&mibextid=kFxxJD" target="_blank" class="px-3 py-2"><i class="fa-brands fa-facebook-f"></i></a></li>

                <li class="shadow rounded d-flex align-items-center"><a href="https://x.com/DesaKrebet?t=S0d-3KAQq06T1Xjak1C1rA&s=09" target="_blank" class="px-3 py-3"><i class="fa-brands fa-twitter"></i></a></li>

                <li class="shadow rounded d-flex align-items-center"><a href="https://www.instagram.com/desawisatakrebet?igsh=MTNtdDVqNmY4YXM0eg==" target="_blank" class="px-3 py-3"><i class="fa-brands fa-instagram"></i></a></li>

                <li class="shadow rounded d-flex align-items-center"><a href="https://www.youtube.com/@desawisatakrebet3690" target="_blank" class="px-3 py-3"><i class="fa-brands fa-youtube"></i></a></li>
            </ul>
        </div>
    </nav>
    @yield('konten')
    <footer class="mt-5 p-5">
        <div class="container">
            <p class="mb-1">Copyright © 2020 Desa Wisata Krebet</p>

            <p class="m-0">Design by Dunia Blanter</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>


    <!-- Bootstrap Timepicker JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-timepicker/0.5.2/js/bootstrap-timepicker.min.js"></script>

    @yield('script')

</body>