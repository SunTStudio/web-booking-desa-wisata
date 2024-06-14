<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/landingpage.css">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/@fullcalendar/core/main.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@fullcalendar/timegrid/main.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar bg-body-tertiary mt-3 mb-5">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="/asset/Logo_Desa_Krebet.png" alt="Bootstrap" height="70">
            </a>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            <ul class="sosmed d-flex gap-2 m-0">
                <li class="p-2 px-3 shadow rounded"><a href="">a</a></li>
                <li class="p-2 px-3 shadow rounded"><a href="">a</a></li>
                <li class="p-2 px-3 shadow rounded"><a href="">a</a></li>
                <li class="p-2 px-3 shadow rounded"><a href="">a</a></li>
            </ul>
        </div>
    </nav>
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
            <div class="col-lg-10 col-sm-12">
                <section class="pemesanan">
                    <h1 class="text-center mb-5 rounded">Pemesanan Tanggal</h1>
                    <div height="20">
                        <div id='calendar'></div>
                    </div>
                </section>
            </div>

            <button type="button" >Booking Tanggal</button>
            <!-- Calendar End -->
        </div>

    </div>
    <footer class="mt-5 p-5">
        <div class="container">
            <p class="mb-1">Copyright © 2020 Desa Wisata Krebet</p>

            <p class="m-0">Design by Dunia Blanter</p>
        </div>
    </footer>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/locales-all.global.min.js'></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');

            if (calendarEl) {
                var calendar = new FullCalendar.Calendar(calendarEl, {
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
    </script>


</body>

</html>