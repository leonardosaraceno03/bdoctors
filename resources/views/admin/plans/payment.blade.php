@extends('layouts.app')

@section('content')
<div class="container pt-5">

    <h3>Nome Piano: {{$plan->name}}</h3>
    <h3>Durata: {{$plan->duration}}</h3>
    <h3>Prezzo: €{{$plan->price}}</h3>

    <form action="{{ route('admin.plans.checkout', $plan->id) }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-primary">Checkout</button>
    </form>

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