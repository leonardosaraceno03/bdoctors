@extends('layouts.app')

@section('content')
    <section class="bg">
        <div class="container">
            <div class="row text-center">
                <span class="">I TUOI MESSAGGI</span>
            </div>
            <div class="row bg-white d-flex container-messaggi">

                @foreach ($messages as $message)
                    <div class="col-6">
                        <div class="card w-100 my-2">
                            <div class="card-header">{{ $message->name }} {{ $message->surname }}</div>
                            <div class="card-body">
                                <p class="card-text">{{ $message->body }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach



            </div>

        </div>
    </section>

    <style scoped>
        .card {
            height: 150px;
        }

        section {
            background-color: rgb(246, 246, 246);
            height: 94vh;
        }

        .container-messaggi {
            border: 1px solid lightgray;
            border-radius: 10px
        }

        span {
            color: rgb(70, 69, 69);
            font-size: 3rem
        }
    </style>
@endsection
