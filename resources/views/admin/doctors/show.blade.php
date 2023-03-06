@extends('layouts.app')

@section('content')
    <div class="container mt-5 rounded-3">
        
        <h1 class="py-5 text-center text-white">
            Il tuo Profilo
        </h1>
        
        @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
        @endif

        <div class="row ms-profile-bg text-white">
            
            <div class="col-lg-5 col-xl-4 col-12 text-center d-flex justify-content-center align-items-center flex-column p-5 rounded-3">
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
                    
                @endforeach
            </div>
            <div class="col-lg-6 col-xl-8 col-sm-12 p-5">
                @foreach ($doctors as $elem)
                    
                    <div class="pb-5">
                        <h2>{{ $elem['name'] }} {{ $elem['surname'] }}</h2>
                    </div>
                    <div>
                        
                        @if($plan_status != 'Il tuo profilo non è sponsorizzato')
                            <h4 class="py-2">Sarai cliente premium fino a : {{ $plan_status }}</h4>
                        @endif

                        <h5> Bio: {{ $elem['description'] }}</h5>
                        <h5> Specializzazioni: {{ $elem['specializations'] }}</h5>
                        <h5> Indirizzo: {{ $elem['address'] }}</h5>
                        <h5> Tel: {{ $elem['telephone'] }}</h5>
                        <h5> Prestazioni: {{ $elem['performance'] }}</h5>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

<style lang="scss" scoped>

    .ms-profile-bg{
        background-color: #0088ff;
        border-radius: 10px;
        box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.5)
    }

    

</style>