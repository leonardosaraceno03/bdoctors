@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-8">
                <div class="card justify-content-center">

                    <div class="m-auto title py-2">
                        Bentornato
                    </div>
                    <div class="card-body m-auto">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group row">
                                {{-- <label for="email"
                                    class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label> --}}

                                <div class="col-md-6 w-100">
                                    <input id="email" type="email" placeholder="E-mail"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                {{-- <label for="password"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label> --}}

                                <div class="col-md-6 w-100">
                                    <input id="password" type="password" placeholder="Password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>



                            <div class="form-group row mb-0">
                                <div class="col-md-8 w-100">
                                    <button id="submit-btn" type="submit" class="btn w-100 m-0">
                                        {{ __('Login') }}
                                    </button>

                                    {{-- @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif --}}
                                </div>
                            </div>
                            <div class="form-group row mt-3">
                                <div class="col-md-6 ">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>

                                        <label class="ricordami form-check-label" for="remember">
                                            Ricordami
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style scoped>
        .title {
            font-size: 2rem;
            color: white
        }

        .form-control {
            border-radius: 0px;

        }

        .form-select {
            border-radius: 0px;

        }


        #submit-btn {
            background-color: #243b55;
            border: 0px;
            border-radius: 0px;
            color: white;
            letter-spacing: 0.3rem
        }

        #submit-btn:hover {
            background-color: #3fb1ce;

        }


        .card {


            background: rgba(23, 23, 41, 0.5);
            box-sizing: border-box;
            box-shadow: 0 15px 25px rgba(0, 0, 0, .6);
            border-radius: 10px;
        }

        .red {
            border: 1px solid red;
        }



        .asterisco {
            font-size: 0.9rem;
        }

        body {
            font-family: sans-serif;
            background: linear-gradient(#141e30, #243b55);
            background-size: 400% 400%;
            animation: gradient 15s ease infinite;
            height: 100vh;
            color: white
        }

        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }
    </style>
@endsection
