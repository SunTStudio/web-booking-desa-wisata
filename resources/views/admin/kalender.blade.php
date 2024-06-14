@extends('admin.layout')

@section('title', 'Kalender | Admin')

@section('titleNav', 'Kalender')

@section('css')
    <link href='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.css' rel='stylesheet' />
    <link rel="stylesheet" href="/css/kalender.css">
@endsection

@section('menu')
    <p class="d-flex justify-content-between align-items-center me-3">
        <a href="{{ route('admin.dashboard') }}" class="text-secondary fw-bold m-1 ms-3">
            <i class="bi bi-key me-2 ps-1 pe-1 rounded"></i> Dashboard 
        </a>
    </p>
    <p class="btn btn-secondary text-light d-flex justify-content-between align-items-center me-3">
        <a href="{{ route('admin.kalender') }}" class="text-light m-1 ms-3 fw-bold">
            <i class="me-2 bi bi-person-fill-up ps-1 pe-1 rounded"></i> Kalender 
        </a>
    </p>
    <p class="d-flex justify-content-between align-items-center me-3">
        <a href="{{ route('admin.booking') }}" class="text-secondary m-1 ms-3 fw-bold">
            <i class="me-2 bi bi-key ps-1 pe-1 rounded"></i> Booking 
        </a>
    </p>
@endsection

@section('content')
    <div class="row justify-content-center m-lg-5 m-1 mt-5">
        <div class="col bg-white p-lg-5 p-3 rounded">
            <div id='calendar'></div>
        </div>
    </div>
@endsection

@section('menuHp')
    <div class="col text-center rounded-top bg-secondary">
        <a href="{{ route('admin.kalender') }}" class="text-white">
            <p><i class="fa-regular fa-calendar-days m-0 p-0 pt-2"></i></p>
            <p>Kalender</p>
        </a>
    </div>
    <div class="col text-center">
        <a href="{{ route('admin.dashboard') }}" class="text-secondary">
            <p><i class="fa-solid fa-globe m-0 p-0 pt-2"></i></p>
            <p>Dashboard</p>
        </a>
    </div>
    <div class="col text-center">
        <a href="{{ route('admin.booking') }}" class="text-secondary">
            <p><i class="fa-solid fa-house-lock m-0 p-0 pt-2"></i></p>
            <p>Booking</p>
        </a>
    </div>
@endsection

@section('scripts')
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
                    events: [
                        {
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
@endsection
