@extends('layouts.app')

@section('content')

<div>
    {{ $bronze->name }}
</div>
<div>
    {{ $silver->name }}
</div>
<div>
    {{ $gold->name }}
</div>

@endsection
