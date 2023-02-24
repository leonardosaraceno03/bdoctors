@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center">
            reviews
        </h1>
        <div class="d-flex flex-wrap">
            @foreach ($reviews as $review)
                <div class="card w-50" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $review->name }} {{ $review->surname }}</h5>

                        <p class="card-text">{{ $review->body }}</p>

                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
