@extends('layouts.app')

@section('content')

<h1>
    @foreach ($doctor->specializations as $specialization)
        <div>{{ $specialization->name }}</div>
    @endforeach
</h1>

@endsection
