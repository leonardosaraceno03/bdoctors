@extends('layouts.doctors')
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
            border: 1px solid lightgray;
            height: 400px;
            border-radius: 10px
        }

        .fa-solid {
            font-size: 10rem
        }

        a {
            color: black;
            text-decoration-line: none
        }

        a:hover {

            text-decoration-line: none;
            cursor: pointer;

        }

        a:hover .fa-solid {
            animation-name: trillo;
            animation-duration: 1s;
            animation-timing-function: ease-in-out;
            animation-iteration-count: infinite;
        }

        @keyframes trillo {
            0% {
                transform: rotate(0deg);
            }

            25% {
                transform: rotate(5deg);
            }

            75% {
                transform: rotate(-5deg);
            }

            100% {
                transform: rotate(0deg);
            }
        }
    </style>
@endsection
