@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Registrazione') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nome') }}<span
                                        class="asterisco">*</span> </label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus maxlength="30">

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="surname" class="col-md-4 col-form-label text-md-right">{{ __('Cognome') }}<span
                                        class="asterisco">*</span></label>

                                <div class="col-md-6">
                                    <input id="surname" type="text"
                                        class="form-control @error('surname') is-invalid @enderror" name="surname"
                                        value="{{ old('surname') }}" required autocomplete="surname" autofocus
                                        maxlength="30">

                                    @error('surname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Indirizzo mail') }}<span
                                        class="asterisco">*</span></label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" maxlength="80">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="address"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Indirizzo') }}<span
                                        class="asterisco">*</span></label>

                                <div class="col-md-6">
                                    <input id="address" type="text"
                                        class="form-control @error('address') is-invalid @enderror" name="address"
                                        value="{{ old('address') }}" required autocomplete="address" autofocus
                                        maxlength="50">

                                    @error('address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="specialization"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Specializzazione') }}<span
                                        class="asterisco">*</span></label>
                                <div class="col-md-6">
                                    <select id="specialization"
                                        class="form-select @error('specialization_id') is-invalid @enderror"
                                        aria-label="Default select example" required autocomplete="specialization"
                                        name="specialization_id">
                                        <option value="" selected>Seleziona una specializzazione</option>
                                        @foreach ($specializations as $elem)
                                            <option value="{{ $elem->id }}">{{ $elem->name }}</option>
                                        @endforeach
                                    </select>

                                    @error('specialization_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Password') }}<span
                                        class="asterisco">*</span></label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control"
                                        @error('password') is-invalid @enderror" required autocomplete="password"
                                        name="password">
                                    <div class="text-danger" id="avviso"></div>

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Conferma Password') }}<span
                                        class="asterisco">*</span></label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" required
                                        autocomplete="password_confirmation" name="password_confirmation">

                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button id="submit-btn" type="submit" class="btn btn-primary">
                                        {{ __('Registrati') }}
                                    </button>

                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        const passwordInput = document.getElementById('password');
        const confirmPasswordInput = document.getElementById('password-confirm');
        const submitBtn = document.getElementById('submit-btn');

        confirmPasswordInput.addEventListener('input', function() {
            if (confirmPasswordInput.value === passwordInput.value) {
                submitBtn.disabled = false;
                let text = "";
                document.getElementById("avviso").innerHTML = text;
                document.getElementById('password').className = "form-control";
                document.getElementById('password-confirm').className = "form-control"

            } else {
                submitBtn.disabled = true;
                document.getElementById('password').className = "form-control red";
                document.getElementById('password-confirm').className = "form-control red"
                let text = "Le password non corrispondono";
                document.getElementById("avviso").innerHTML = text;

            }
        });
    </script>
    <style>
        .red {
            border: 1px solid red;
        }



        .asterisco {
            font-size: 0.9rem;
        }
    </style>
@endsection
