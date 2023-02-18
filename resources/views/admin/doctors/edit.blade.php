@extends('layouts.app')

@section('content')
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
        <div class="my-3">
            <label class="form-label" for="">CV</label>
            <input value="{{ $doctor->cv }}" class="form-control" @error('cv') is invalid @enderror type="text"
                name="cv">
            @error('cv')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="my-3">
            <label class="form-label" for="">Avatar</label>
            <input value="{{ $doctor->avatar }}" class="form-control" @error('avatar') is invalid @enderror type="file"
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
            <label class="form-label" for="">Visibility</label>
            <input value="{{ $doctor->visibility }}" class="form-control" @error('visibility') is invalid @enderror
                type="number" name="visibility">
            @error('visibility')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-success">Edit</button>
    </form>



    <h1>




        @foreach ($doctor->specializations as $specialization)
            <div>{{ $specialization->name }}</div>
        @endforeach
    </h1>
@endsection
