<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>
    @yield('css')

</head>

<body>
    <nav class="navbar bg-body-tertiary mb-5">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="/asset/Logo_Desa_Krebet.png" alt="Bootstrap" height="70">
            </a>
            <form class="d-flex m-0" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
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

    @yield('script')

</body>