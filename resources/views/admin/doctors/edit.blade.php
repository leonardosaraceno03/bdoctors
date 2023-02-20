@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <form action="{{ route('admin.doctors.update', $doctor->id) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="my-3">
                <label class="form-label" for="">Address</label>
                <input value="{{ $doctor->address }}" class="form-control" @error('address') is invalid @enderror type="text"
                    name="address">
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
                        <input class="form-check-input" type="checkbox" name="specializations[]" value="{{ $specialization->id }}">
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
                <input value="{{ $doctor->cv }}" @error('cv') is invalid @enderror type="file"
                    name="cv">
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
                <input value="{{ $doctor->avatar }}" @error('avatar') is invalid @enderror type="file"
                    name="avatar">
                @error('avatar')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            
            <div class="my-3">
                <label class="form-label" for="">Telephone</label>
                <input value="{{ $doctor->telephone }}" class="form-control" @error('telephone') is invalid @enderror
                    type="text" name="telephone">
                @error('telephone')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            
            <div class="my-3">
                <label class="form-label" for="">Performance</label>
                <input value="{{ $doctor->performance }}" class="form-control" @error('performance') is invalid @enderror
                    type="text" name="performance">
                @error('performance')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            
            <div class="my-3">
                <label class="form-label" for="">Description</label>
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
            
            
            
            <button type="submit" class="btn btn-success">Edit</button>
        
        </form>
    </div>


    
@endsection
