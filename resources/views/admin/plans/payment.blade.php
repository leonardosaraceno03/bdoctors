@extends('layouts.app')

@section('content')
<div class="container pt-5">

    <h3>Nome Piano: {{$plan->name}}</h3>
    <h3>Durata: {{$plan->duration}}</h3>
    <h3>Prezzo: €{{$plan->price}}</h3>


</div>



{{-- <div>
    {{ $bronze->name }}
</div>
<div>
    {{ $silver->name }}
</div>
<div>
    {{ $gold->name }}
</div>
<div>
    {{ $bronze->date() }}
</div> --}}

@endsection