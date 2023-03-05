@extends('layouts.doctors')
@section('content')
    <div class="container mt-5 p-3 bg-light">
        
        <div class="text-center mt-5">
            <h1 class="text-primary mb-3">Dashboard</h1>
            <h2>Benvenuto, <span class="text-primary">{{$doctor->user->name}}</span>!</h2>
        </div>

        <div class="row justify-content-center mt-5 p-3">
            
            <a href="{{ route('admin.doctors.show', $doctor->id) }}"
                class="col-12 col-md-8 col-lg-2 d-flex flex-column justify-content-center align-items-center ms-dashboard-card m-2 p-2">
                <div><i class="fa-solid fa-user "></i></div>
                <h3 class="mt-3">Profilo</h3>

            </a>
            <a href="{{ route('admin.messages.index', $doctor->id) }}"
                class="col-12 col-md-4 col-lg-2 d-flex flex-column justify-content-center align-items-center ms-dashboard-card m-2 p-2">
                <div><i class="fa-solid fa-comment "></i></div>
                <h3 class="mt-3">Messaggi</h3>

            </a>


            <a href="{{ route('admin.statistics.index', $doctor->id) }}"
                class="col-12 col-md-4 col-lg-2 d-flex flex-column justify-content-center align-items-center ms-dashboard-card m-2 p-2">
                <div><i class="fa-solid fa-chart-simple "></i></div>
                <h3 class="mt-3">Statistiche</h3>

            </a>

            <a href="{{ route('admin.plans.index', $doctor->id) }}"
                class="col-12 col-md-4 col-lg-2 d-flex flex-column justify-content-center align-items-center ms-dashboard-card m-2 p-2">
                <div><i class="fa-solid fa-trophy"></i></div>
                <h3 class="mt-3">Sponsor</h3>

            </a>

            <a href="{{ route('admin.reviews.index', $doctor->id) }}"
                class="col-12 col-md-4 col-lg-2 d-flex flex-column justify-content-center align-items-center ms-dashboard-card m-2 p-2">
                <div class=""><i class="fa-solid fa-star size-star"></i></div>
                <h3 class="mt-3">Recensioni</h3>
            </a>
            
        </div>
    </div>
    
<style scoped>
    .ms-dashboard-card {
        border: 1px solid lightgray;
        height: 350px;
        border-radius: 10px;
        background-color: white;
    }

    .fa-solid {
        font-size: 7rem;
    }

    a {
        color: #0367BE;
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

    .ms-dashboard-card:hover{
        background-color: #0367BE;
        color: white;
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
