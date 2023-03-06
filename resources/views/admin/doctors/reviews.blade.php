@extends('layouts.app')

@section('content')
    <section class="bg-custom">
        <div class="container">
            <div class="row text-center">
                <h1 class="py-5 text-white">Le tue recensioni</h1>
            </div>
            <div class="container bg-white container-messaggi ms-h-custom overflow-auto">

                @foreach ($reviews as $review)
                    <div class="row">
                        <div class="col-12 py-2">
                            <div class="card h-100 my-2">
                                <div class="card-header d-flex justify-content-between text-white">
                                    <div>{{ $review->name }} {{ $review->surname }}</div>
                                    <div>{{$review->created_at}}</div>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">{{ $review->body }}</p>
                                </div>
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
        .bg-custom{
            background-color: #80aeea;
        }
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
        }
    </style>
@endsection
