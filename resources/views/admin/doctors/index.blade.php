@extends('layouts.app')
@section('content')
    <div class="container mt-2">
        <div class="row d-flex justify-content-around">

            <a href="{{ route('admin.doctors.show', $doctor->id) }}"
                class="col-5 d-flex flex-column justify-content-center align-items-center">
                <div><i class="fa-solid fa-user "></i></div>
                <h2 class="mt-3">Profilo</h2>

            </a>
            <a href="{{ route('admin.messages.index', $doctor->id) }}"
                class="col-5 d-flex flex-column justify-content-center align-items-center">
                <div><i class="fa-solid fa-comment "></i></div>
                <h2 class="mt-3">Messaggi</h2>

            </a>


            <a href="{{ route('admin.statistics.index', $doctor->id) }}"
                class="col-5 mt-5 d-flex flex-column justify-content-center align-items-center">
                <div><i class="fa-solid fa-chart-simple "></i></div>
                <h2 class="mt-3">Statistiche</h2>

            </a>

            <a href="{{ route('admin.plans.index', $doctor->id) }}"
                class="col-5 mt-5 d-flex flex-column justify-content-center align-items-center">
                <div><i class="fa-solid fa-chart-simple "></i></div>
                <h2 class="mt-3">Sponsor</h2>

            </a>

            <a href="{{ route('admin.reviews.index', $doctor->id) }}"
                class="col-5 mt-5 d-flex flex-column justify-content-center align-items-center">
                <div class="">
                    <i class="fa-solid fa-star size-star"></i>

                </div>


                <h2 class="mt-3">Recensioni</h2>

            </a>
        </div>
    </div>
    <style scoped>
        .col-5 {
            border: 2px solid green;
            height: 400px;

        }

        .fa-solid {
            font-size: 10rem
        }

        a {
            color: black;
            text-decoration-line: none
        }

        a:hover {
            color: black;
            text-decoration-line: none;
            cursor: pointer;
        }
    </style>
@endsection
