@extends('layouts.app')

@section('content')
    <section class="bg">
        <div class="container">
            <div class="row text-center">
                <span class="py-5">I tuoi messaggi</span>
            </div>
            <div class="row bg-white container-messaggi ms-h-custom overflow-auto">

                @foreach ($messages as $message)
                    <div class="col-12 py-2">
                        <div class="card h-100 my-2">
                            <div class="card-header d-flex justify-content-between">
                                <div>{{ $message->name }} {{ $message->surname }}</div>
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

        .ms-h-custom{
            height: 70vh;
        }

        section {
            background-color: rgb(246, 246, 246);
            height: calc(100vh - 56px);
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
