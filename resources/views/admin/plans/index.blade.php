@extends('layouts.app')

@section('content')

<form id="plan-form" method="POST" action="{{ route('admin.messages.create') }}">
    @csrf
    <input type="hidden" name="plan_id" value="{{ $bronze->id }}">
    <input type="hidden" name="price" value="{{ $bronze->price }}">
    <button type="submit" class="btn btn-primary">Select</button>
</form>

<form id="plan-form" method="POST" action="{{ route('admin.messages.create') }}">
    @csrf
    <input type="hidden" name="plan_id" value="{{ $silver->id }}">
    <input type="hidden" name="price" value="{{ $silver->price }}">
    <button type="submit" class="btn btn-primary">Select</button>
</form>

<form id="plan-form" method="POST" action="{{ route('admin.messages.create') }}">
    @csrf
    <input type="hidden" name="plan_id" value="{{ $gold->id }}">
    <input type="hidden" name="price" value="{{ $gold->price }}">
    <button type="submit" class="btn btn-primary">Select</button>
</form>


<div>
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
</div>

@endsection
