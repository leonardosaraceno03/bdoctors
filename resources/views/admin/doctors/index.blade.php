@extends('layouts.app')
@section('content')
@foreach ($doctors as $doctor)
    <div>
        <h2>{{ $doctor['name'] }} {{ $doctor['surname'] }}</h2>
        <p>Address: {{ $doctor['address'] }}</p>
        <p>Telephone: {{ $doctor['telephone'] }}</p>
        <p>Performance: {{ $doctor['performance'] }}</p>
        <p>Description: {{ $doctor['description'] }}</p>
        <p>Specialization: {{ $doctor['specializations'] }}</p>
    </div>
    <a href="{{route('admin.doctors.edit', $doctor['id'])}}">
        <button class="btn btn-dark text-info">Edit</button>
    </a>
@endforeach
@endsection