@extends('layouts.app')

@section('content')
    <div class="container pt-5">

        <h3>Nome Piano: {{ $plan->name }}</h3>
        <h3>Durata: {{ $plan->duration }} ore</h3>
        <h3>Prezzo: € {{ $plan->price }}</h3>

        <form id="form" action="{{ route('admin.plans.checkout', $plan->id) }}" method="POST">
            @csrf
            <div class="py-3">
                <label class="form-label" for="">Nome sulla carta<span class="asterisco">*</span></label>
                <input id="nome-sulla-carta" value="" required class="form-control" type="text"
                    name="Nome sulla carta">

            </div>
            <div class="py-3">
                <label class="form-label" for="">Numero carta<span class="asterisco">*</span></label>
                <input id="numero-carta" value="" required class="form-control" min="0" maxlength="16"
                    pattern="[0-9]{16}" type="text" name="numero-carta">

            </div>
            <div class="py-3">
                <label class="form-label" for="">CVV-CVC<span class="asterisco">*</span></label>
                <input id="CVV-CVC" value="" required class="form-control" min="0" maxlength="3"
                    pattern="[0-9]{3}" type="text" name="CVV-CVC">

            </div>
            <div class="py-3">
                <label class="form-label" for="">Scadenza carta<span class="asterisco">*</span></label>
                <input id="scadenza-carta" value="" required class="form-control" type="month"
                    name="scadenza-carta">

            </div>

            <button id="submit-btn" type="submit" class="btn btn-primary">Checkout</button>
        </form>

    </div>

    <script>
        // Selezioniamo il form e gli elementi da validare
        const form = document.getElementById('form');
        const nomeCartaInput = document.getElementById('nome-sulla-carta');
        const numeroCartaInput = document.getElementById('numero-carta');
        const scadenzaCartaInput = document.getElementById('scadenza-carta');
        const cvvCarta = document.getElementById('CVV-CVC');
        // Selezioniamo il bottone di invio
        const inviaButton = document.getElementById('submit-btn');

        // Aggiungiamo un evento di submit al form per eseguire la validazione
        form.addEventListener('input', (event) => {
            let hasError = false;

            // Verifichiamo che il nome della carta sia stato inserito
            if (nomeCartaInput.value.trim() === '') {

                hasError = true;
            }

            // Verifichiamo che il numero della carta abbia esattamente 16 cifre
            if (numeroCartaInput.value.trim().length !== 16) {

                hasError = true;
            }
            if (cvvCarta.value.trim().length !== 3) {

                hasError = true;
            }

            // Verifichiamo che la scadenza della carta sia successiva alla data odierna
            const scadenzaCarta = new Date(scadenzaCartaInput.value);
            const oggi = new Date();
            if (scadenzaCarta <= oggi) {

                hasError = true;
            }

            // Disabilitiamo il bottone di invio se ci sono errori di validazione
            if (hasError) {
                event.preventDefault();
                inviaButton.disabled = true;
            } else {
                inviaButton.disabled = false;
            }
        });
    </script>

@endsection
