@extends('layouts.app')

@section('content')
    
    <div class="container mt-5">
        @foreach ($doctors as $elem)
            <div>
                <h2>{{ $elem['name'] }} {{ $elem['surname'] }}</h2>
                <img src="{{ asset('storage/' . $elem['avatar']) }}" alt="" width="500px" class="mt-3 mb-3">
                <p>Address: {{ $elem['address'] }}</p>
                <p>Telephone: {{ $elem['telephone'] }}</p>
                <p>Performance: {{ $elem['performance'] }}</p>
                <p>Description: {{ $elem['description'] }}</p>
                <p>Specialization: {{ $elem['specializations'] }}</p>
            </div>
        @endforeach
    </div>
        
@endsection
