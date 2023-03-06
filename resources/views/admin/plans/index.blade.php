@extends('layouts.app')

@section('content')

    <div class="container my-5">
        <div class="row justify-content-around">
            <h1 class="text-white text-center py-5">
                Sponsorizza il tuo profilo
            </h1>
            <p class="package col-10 p-4">Acquistare un pacchetto per rimanere in evidenza sul sito BDoctors ti permetterà di
                aumentare
                la visibilità
                del tuo profilo professionale e di differenziarti dalla concorrenza. Grazie alla maggiore visibilità, potrai
                attirare l'attenzione di potenziali clienti e aumentare le tue opportunità di business. </p>
        </div>
        <div class="row justify-content-between py-5">
            @foreach ($plans as $plan)
                <div class="package col-lg-3 col-md-10 col-sm-10 mx-auto my-5">
                    <h2>Pacchetto: {{ $plan->name }}</h2>
                    <p>Prezzo: € {{ $plan->price }}</p>
                    <p class="">Con questo pacchetto rimarrai in evidenza per {{ $plan->duration }} ore</p>
                    <a href="{{ route('admin.plans.payment.show', ['plan' => $plan->id]) }}" class="btn-plans ">Scegli
                        Pacchetto</a>
                </div>
            @endforeach
        </div>


    </div>
@endsection


<style scoped>
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    body {
        font-family: sans-serif;
        background: linear-gradient(#141e30, #243b55);
        background-size: 400% 400%;
        animation: gradient 15s ease infinite;
        height: 100vh;
        color: white
    }



    .package {
        background-color: #fff;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
        padding: 30px;
        text-align: center;

        border-radius: 5px;
    }

    .package h2 {
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 10px;
    }

    .package p {
        font-size: 18px;
        margin-bottom: 20px;
    }

    .package ul {
        list-style: none;
        margin-bottom: 30px;
    }

    .package ul li {
        font-size: 16px;
        margin-bottom: 10px;
    }

    .btn-plans {
        background: rgb(42, 42, 105);
        border: none;
        color: #fff;
        padding: 10px 20px;
        text-align: center;
        font-size: 18px;
        border-radius: 5px;
        text-decoration: none;
        display: inline-block;
        transition: all 0.3s ease-in-out;
        text-decoration: none
    }


    .btn-plans:hover {
        background-color: #1a46da;
        text-decoration: none;
        color: white
    }

    .color-bronze {
        color: brown;
    }

    .color-silver {
        color: silver;
    }

    .color-gold {
        color: gold;
    }

    .fa-trophy {
        font-size: 6rem;
    }

    .border-color-1 {
        border: 3px solid brown
    }

    .border-color-2 {
        border: 3px solid silver
    }

    .border-color-3 {
        border: 3px solid gold
    }


</style>
