@extends('layouts.app')

@section('content')
    <h1 class="text-center my-5">
        STATISTICS
    </h1>
    <div class="container">
        <div class="row">
            <div class="col-3 d-flex flex-column justify-content-center">
                <h5>Questi sono i tuoi voti:</h5>
                @foreach ($doctors as $doctor)
                    <ul>
                        @foreach ($doctor->ratings as $rating)
                            <li>{{ $rating->stars }} </li>
                        @endforeach
                    </ul>
                    <div>La tua media voto è:
                        <h1>{{ $averageRating }}
                        </h1>
                    </div>
                @endforeach
            </div>
            <div class="col-9 text-align-center"><canvas id="myChart"></canvas></div>
        </div>
    </div>


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



</style>
