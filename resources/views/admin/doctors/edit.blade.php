@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <form action="{{ route('admin.doctors.update', $doctor->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="my-3">
                <label class="form-label" for="">Indirizzo</label>
                <input value="{{ $doctor->address }}" required class="form-control" @error('address') is invalid @enderror
                    type="text" name="address">
                @error('address')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="my-3 border p-2">
                <div>
                    <label class="form-label" for="">Specializzazioni</label>
                </div>
                @foreach ($specializations as $specialization)
                    <div class="form-check d-inline-block ml-2">
                        <input class="form-check-input" type="checkbox" name="specializations[]"
                            @error('specialization') is invalid @enderror value="{{ $specialization->id }}"
                            {{ $doctor->specializations->contains($specialization) ? 'checked' : '' }}>
                        <label class="form-check-label">{{ $specialization->name }}</label>
                    </div>
                @endforeach
                @error('specializations')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="my-3">
                <div>
                    <label class="form-label" for="">CV</label>
                </div>
                <input value="{{ $doctor->cv }}" @error('cv') is invalid @enderror type="file" name="cv">
                <div class="">
                    il formato del file deve essere .jpeg, .png
                </div>
                @error('cv')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>



            <div class="my-3">
                <div>
                    <label class="form-label" for="">Avatar</label>
                </div>
                <input value="{{ $doctor->avatar }}" @error('avatar') is invalid @enderror type="file" name="avatar">
                <div class="">
                    il formato del file deve essere .jpeg, .png
                </div>
                @error('avatar')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="my-3">
                <label class="form-label" for="">Telefono</label>
                <input value="{{ $doctor->telephone }}" class="form-control" @error('telephone') is invalid @enderror
                    type="text" name="telephone">
                @error('telephone')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="my-3">
                <label class="form-label" for="">Prestazione/i</label>
                <input value="{{ $doctor->performance }}" class="form-control" @error('performance') is invalid @enderror
                    type="text" name="performance">
                @error('performance')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="my-3">
                <label class="form-label" for="">Descrizione</label>
                <input value="{{ $doctor->description }}" class="form-control" @error('description') is invalid @enderror
                    type="text" name="description">
                @error('description')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="my-3">
                <label class="form-label">Profilo</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="visibility" id="visibilityTrue" value="1"
                        {{ $doctor->visibility == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="visibilityTrue">
                        Visibile
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="visibility" id="visibilityFalse" value="0"
                        {{ $doctor->visibility == 0 ? 'checked' : '' }}>
                    <label class="form-check-label" for="visibilityFalse">
                        Nascosto
                    </label>
                </div>
                @error('visibility')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="d-flex justify-content-between">
                <div><button type="submit" class="btn btn-success">Salva</button></div>

                <div>
                    <button class="btn btn-danger" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">Elimina account</button>
                </div>


            </div>
        </form>
        <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1"
            id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Sei sicuro di voler eliminare il tuo
                    account?
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <div></div>
                <form action="{{ route('admin.doctors.destroy', $doctor->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" type="submit">
                        Elimina
                    </button>
                </form>
            </div>
        </div>






    </div>
@endsection
