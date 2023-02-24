@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center">
            messagges
        </h1>
        <div class="d-flex flex-wrap">
            @foreach ($messages as $message)
                <div class="card w-50" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $message->name }} {{ $message->surname }}</h5>

                        <p class="card-text">{{ $message->body }}</p>

                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
