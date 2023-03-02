@extends('layouts.app')

@section('content')
<div class="container pt-5">
    @foreach ($plans as $plan)
        <div>
            <h3>{{ $plan->name }}</h3>
            <p>{{ $plan->description }}</p>
            <a href="{{ route('admin.plans.payment.show', ['plan' => $plan->id]) }}">Seleziona questo piano</a>
        </div>
    @endforeach
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
