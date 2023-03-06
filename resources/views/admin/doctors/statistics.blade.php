@extends('layouts.app')

@section('content')
    <section class="bg-custom">
        <h1 class="text-center py-5 text-white">
            Le tue statistiche
        </h1>
        <div class="container">
            <div class="row">
                {{-- <div class="col-12 container-statistics d-flex flex-column justify-content-center">
                    <h5>Questi sono i tuoi voti:</h5>
                    @foreach ($doctors as $doctor)
                        <ul>
                            @foreach ($doctor->ratings as $rating)
                                <li>{{ $rating->stars }} </li>
                            @endforeach
                        </ul>
                    @endforeach
                </div> --}}
            </div>
            <div class="row p-3 my-2 container-statistics bg-white">La media dei tuoi voti è:
                <h1>{{ $averageRating }}
                </h1>
            </div>
            <div class="row bg-white my-3">
                <div class="col-12 w-100 container-statistics text-align-center"><canvas class="w-75"
                        id="myChart"></canvas></div>
            </div>
        </div>

    </section>


    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('myChart');


        @foreach ($doctors as $doctor)
            const ratings = {!! json_encode($doctor->ratings->pluck('stars')->toArray()) !!}
        @endforeach

        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['1', '2', '3', '4', '5'],
                datasets: [{
                    label: 'Voti',
                    data: ratings,


                    borderColor: '#36A2EB',
                    backgroundColor: '#9BD0F5',


                    borderWidth: 1
                }]

            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        max: 5
                    }
                }
            }
        });
    </script>
@endsection


<style scoped>
    section {
        background-color: #80aeea;
        height: 94vh;
    }

    .container-statistics {
        border: 1px solid lightgray;
        border-radius: 10px
    }

    .col-3 {
        border: 1px solid lightgray;
        border-radius: 10px
    }

    .col-9 {
        border: 1px solid lightgray;
        border-radius: 10px
    }
</style>
