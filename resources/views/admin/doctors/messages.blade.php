@extends('layouts.app')

@section('content')
    <section class="bg">
        <div class="container">
            <div class="row text-center">
                <h1 class="py-5 text-white">I tuoi messaggi</h1>
            </div>
            <div class="row bg-white container-messaggi ms-h-custom overflow-auto">

                @foreach ($messages as $message)
                    <div class="col-12 py-2">
                        <div class="card h-100 my-2">
                            <div class="card-header d-flex justify-content-between text-white">
                                <div>{{ $message->name }} {{ $message->surname }} ~ {{$message->email}}</div>
                                <div>{{$message->created_at}}</div>
                            </div>
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
        .card-header{
            background-color: #0367BE;
        }

        .ms-h-custom{
            height: 70vh;
        }

        section {
            height: calc(100vh - 56px);
            background-color: #80aeea;
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
