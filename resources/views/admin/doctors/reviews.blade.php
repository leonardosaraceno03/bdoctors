@extends('layouts.app')

@section('content')
    <section class="bg">
        <div class="container">
            <div class="row text-center">
                <span class="py-5">Le tue recensioni</span>
            </div>
            <div class="row bg-white container-messaggi ms-h-custom overflow-auto">

                @foreach ($reviews as $review)
                    <div class="col-12 py-2">
                        <div class="card h-100 my-2">
                            <div class="card-header d-flex justify-content-between">
                                <div>{{ $review->name }} {{ $review->surname }}</div>
                                <div>{{$review->created_at}}</div>
                            </div>
                            <div class="card-body">
                                <p class="card-text">{{ $review->body }}</p>
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
