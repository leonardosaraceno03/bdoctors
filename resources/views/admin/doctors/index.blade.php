@extends('layouts.app')
@section('content')
<div class="container mt-5">
    <h1 class="text-primary">Dashboard</h1>
    <h2>{{$user->name}} {{$user->surname}}</h2>
    <a href="{{route('admin.doctors.edit', $doctor['id'])}}">
        <button class="btn btn-dark text-info">Edit</button>
    </a> 
</div>

@endsection