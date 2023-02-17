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
                        <ul>
                            <li>
                                <h2>Edit Profile</h2>
                            </li>
                            <li>
                                <h2>My Messages</h2>
                            </li>
                            <li>
                                <h2>My Reviews</h2>
                            </li>
                            <li>
                                <h2>My Statistics</h2>
                            </li>
                        </ul>

                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection
