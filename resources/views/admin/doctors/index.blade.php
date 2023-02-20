@extends('layouts.app')
@section('content')
<div class="container mt-5">
    <h1 class="text-primary">Dashboard</h1>
    @foreach ($doctors as $doctor)
        <div>
            <h2>Benvenuto, {{ $doctor['name'] }} {{ $doctor['surname'] }}</h2>
            <p>Address: {{ $doctor['address'] }}</p>
            <p>Specialization: {{ $doctor['specializations'] }}</p>
        </div>
        <a href="{{route('admin.doctors.edit', $doctor['id'])}}">
            <button class="btn btn-dark text-info">Edit</button>
        </a>
    @endforeach
</div>

@endsection