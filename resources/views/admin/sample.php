<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/formPage.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat&display=swap">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body style="background-color:rgb(243, 244, 246);">

    <section id="nav">
        <nav class="navbar navbar-expand-lg bg-white">
            <div class="container-fluid">
                <img src="\img\desa-krebet.png" alt="" class="img-fluid navbar-brand ps-4" id="logo">
                <div>
                    <ul class="navbar-nav d-flex  text-center mb-2 mb-lg-0">
                        <li class="nav-item d-flex me-4">
                            <a class="nav-link active fw-bold text-secondary me-3" aria-current="page" href="#"><i class="bi bi-exclude"></i> @yield('titleNav')</a>
                            <div class="dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-person-circle"></i>
                                </a>
                                <ul class="dropdown-menu p-0 position-absolute" id="drop-menu">
                                    <li style="font-size:0.7rem;"><a class="dropdown-item p-2 rounded fw-bold" href="#"><i class="bi bi-door-open"></i> Keluar</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
    <section id="konten">
        <div class="container-fluid">
            <div class="row justify-content-between">
                <div class="col-lg-2 col-10 bg-white pt-5 pb-5" id="main-menu">
                    @yield('menu')
                    <p class="btn btn-secondary text-light d-flex justify-content-between align-items-center me-3 "><a href="#" class=" text-light fw-bold m-1 ms-3"><i class="bi bi-key me-2  ps-1 pe-1 rounded"></i> Dashboard </a></p>
                    <p class="d-flex justify-content-between align-items-center me-3 "><a href="#" class="text-secondary m-1 ms-3 fw-bold"><i class=" me-2 bi bi-person-fill-up  ps-1 pe-1 rounded"></i> Kalender </a></p>
                    <p class="d-flex justify-content-between align-items-center me-3 "><a href="#" class="text-secondary m-1 ms-3 fw-bold"><i class=" me-2 bi bi-key    ps-1 pe-1 rounded"></i> Booking </a> </p>
                </div>
                <div class="col">
                    @yield('content')

                </div>
            </div>
        </div>

    </section>

    <div class="fixed-bottom" id="mobile-content">
        <div class="container-fluid">
            <div class="row text-secondary fw-bold bg-white pt-1 shadow rounded-top" id="smartphone-menu">
                <div class="col text-center rounded-top bg-secondary">
                    <p><i class="fa-regular fa-calendar-days"></i></p>
                    <p>Calendar</p>
                </div>
                <div class="col text-center">
                    <p><i class="fa-solid fa-globe"></i></p>
                    <p>Dashboard</p>
                </div>
                <div class="col text-center">
                    <p><i class="fa-solid fa-house-lock"></i></p>
                    <p>Booking</p>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    @yield('scripts')
</body>

</html>