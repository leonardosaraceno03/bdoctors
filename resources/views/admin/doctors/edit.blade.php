@extends('layouts.app')

@section('content')
    <section class="py-3">
        <div class="container container-edit bg-white py-3">
            <form action="{{ route('admin.doctors.update', $doctor->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="py-3">
                    <label class="form-label" for="">Indirizzo<span class="asterisco">*</span></label>
                    <input value="{{ $doctor->address }}" required class="form-control"
                        @error('address') is invalid @enderror type="text" name="address">
                    @error('address')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div id="container-spec" class="my-3  border p-2">
                    <div>
                        <label class="form-label" for="">Specializzazioni<span class="asterisco">*</span></label>
                    </div>
                    @foreach ($specializations as $specialization)
                        <div class="form-check d-inline-block ml-2">
                            <input class="form-check-input option" type="checkbox" name="specializations[]"
                                @error('specialization') is invalid @enderror value="{{ $specialization->id }}"
                                {{ $doctor->specializations->contains($specialization) ? 'checked' : '' }}>
                            <label class="form-check-label option-label">{{ $specialization->name }}</label>
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
                    <input value="{{ $doctor->avatar }}" @error('avatar') is invalid @enderror type="file"
                        name="avatar">
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
                        type="text" name="telephone" min="0" maxlength="10" minlength="10" pattern="[0-9]{10}">
                    @error('telephone')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="my-3">
                    <label class="form-label" for="">Prestazione/i</label>
                    <input value="{{ $doctor->performance }}" class="form-control"
                        @error('performance') is invalid @enderror type="text" name="performance" maxlength="255">
                    @error('performance')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="my-3">
                    <label class="form-label" for="">Descrizione</label>
                    <input value="{{ $doctor->description }}" class="form-control"
                        @error('description') is invalid @enderror type="text" name="description" maxlength="255">
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
                    <div><button id="submit-btn1" type="submit" class="btn btn-success">Salva</button></div>

                    <div>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Elimina
                        </button>
                    </div>


                </div>
            </form>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <p class="offcanvas-title">Sei sicuro di voler eliminare il tuo
                                account?
                            </p>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-footer">

                            <form action="{{ route('admin.doctors.destroy', $doctor->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" data-bs-dismiss="modal">Elimina</button>

                            </form>
                        </div>

                    </div>
                </div>
            </div>







        </div>
    </section>


    <script>
        const options = document.querySelectorAll('.option');
        const optionLabels = document.querySelectorAll('.option-label');
        const submitBtn = document.getElementById('submit-btn1');

        function enableSubmitBtn() {
            let atLeastOneChecked = false;

            options.forEach(function(option) {
                if (option.checked) {
                    atLeastOneChecked = true;
                }
            });

            submitBtn.disabled = !atLeastOneChecked;

            if (atLeastOneChecked) {
                optionLabels.forEach(function(label) {
                    label.classList.remove('red-text');
                });
            } else {
                optionLabels.forEach(function(label) {
                    label.classList.add('red-text');
                });
            }
        }

        options.forEach(function(option) {
            option.addEventListener('change', enableSubmitBtn);
        });
    </script>

    <style scoped>
        section {
            background-color: rgb(246, 246, 246);
            height: 100vh;
        }

        .container-edit {
            border: 1px solid lightgray;
            border-radius: 10px
        }

        .red-text {
            color: red;
        }
    </style>
@endsection
