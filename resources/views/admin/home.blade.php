@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('Questa è la tua dashboard') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <a href="{{route('admin.doctors.index')}}">clicca</a>
                        {{-- <ul>
                            <li>
                                <h2>
                                    <a href="{{ route('admin.edit') }}">
                                        Edit Profile
                                    </a>

                                </h2>
                            </li>
                            <li>
                                <h2>
                                    <a href="{{ route('admin.messagges') }}">
                                    My Messages
                                    </a>
                                </h2>
                            </li>
                            <li>
                                <h2>
                                    <a href="{{ route('admin.reviews') }}">
                                        My Reviews
                                    </a>

                                </h2>
                            </li>
                            <li>
                                <h2>
                                    <a href="{{ route('admin.statistics') }}">
                                        My Statistics
                                    </a>
                                </h2>
                            </li>
                        </ul> --}}

                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection
