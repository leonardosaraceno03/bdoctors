@extends('layouts.app')

@section('content')
    <div class="container mt-5 rounded-3 bg-light">
        <div class="row">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <div class="col-3 text-center d-flex justify-content-center align-items-center flex-column p-5 rounded-3"
                style="background-color: #9CE2DB">
                @foreach ($doctors as $elem)
                    <div class="d-flex align-items-center justify-content-center rounded-circle"
                        style="min-width: 250px; width: 250px; height: 250px; background-color: #e9ecef;">
                        <img src="{{ asset('storage/' . $elem['avatar']) }}" alt="" class="img-fluid rounded-circle"
                            style="height:250px">
                    </div>
                    <div class="mt-5">
                        <a href="{{ route('admin.doctors.edit', $elem['id']) }}" class="btn btn-light"
                            type="button">Modifica Profilo</a>
                    </div>
                    <div class="mt-5">
                        <button class="btn btn-light" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Visualizza CV</button>
                    </div>
                @endforeach
            </div>
            <div class="col-9 p-5">
                @foreach ($doctors as $elem)
                    <div class="offcanvas offcanvas-end w-50" tabindex="-1" id="offcanvasRight"
                        aria-labelledby="offcanvasRightLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasRightLabel">Cv di {{ $elem['name'] }}
                                {{ $elem['surname'] }}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <img src="{{ asset('storage/' . $elem['cv']) }}" alt="" height="1000px"
                                class="mt-3 mb-3">
                        </div>
                    </div>
                    <div class="pb-5">
                        <h2>{{ $elem['name'] }} {{ $elem['surname'] }}</h2>
                    </div>
                    <div class="fs-5">
                        <p><span class="text-primary">Descrizione:</span> {{ $elem['description'] }}</p>
                        <p><span class="text-primary">Specializzazione/i:</span> {{ $elem['specializations'] }}</p>
                        <p><span class="text-primary">Indirizzo:</span> {{ $elem['address'] }}</p>
                        <p><span class="text-primary">Telefono:</span> {{ $elem['telephone'] }}</p>
                        <p><span class="text-primary">Prestazioni:</span> {{ $elem['performance'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
