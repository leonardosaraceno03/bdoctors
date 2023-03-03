<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    {{-- Css --}}
    <link rel=“stylesheet” href="{{ asset('css/app.css') }}">
    <script src="https://kit.fontawesome.com/20d85c6a60.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    {{-- Title --}}
    <title>BDoctors</title>

</head>

<body>
    <div id="root">
        @if (Auth::check())
            <script>
                window.authUser = {!! json_encode(Auth::user()) !!};
            </script>
        @else
            <script>
                window.authUser = null;
            </script>
        @endif
    </div>



    {{-- inserisco lo script relativo alla porzione pubblica --}}
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>
