@extends('layouts.app')

@section('content')
    <div class="container pt-5 d-flex justify-content-between">

        @php
            $Colors = ['color-bronze', 'color-silver', 'color-gold'];
            $borderColors = ['border-color-1', 'border-color-2', 'border-color-3'];
            $i = 0;
        @endphp

        @foreach ($plans as $plan)
            <a href="{{ route('admin.plans.payment.show', ['plan' => $plan->id]) }}" class="text-decoration-none text-dark">
                <div class="text-center rounded-5 p-5 {{ $borderColors[$i % 3] }}">



                    <i class="fa-solid fa-trophy {{ $Colors[$i % 3] }}"></i>

                    <h5 class="card-title my-3">
                        {{ $plan->name }}
                    </h5>

                    <h6 class="card-subtitle mb-2 text-muted">{{ $plan->price }} €</h6>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $plan->duration }} h</h6>



                </div>
            </a>


            @php
                $i++;
            @endphp
        @endforeach
    </div>
@endsection


<style scoped>
    .color-bronze {
        color: brown;
    }

    .color-silver {
        color: silver;
    }

    .color-gold {
        color: gold;
    }

    .fa-trophy {
        font-size: 6rem;
    }

    .border-color-1 {
        border: 3px solid brown
    }

    .border-color-2 {
        border: 3px solid silver
    }

    .border-color-3 {
        border: 3px solid gold
    }
</style>
