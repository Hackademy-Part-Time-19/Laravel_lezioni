<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <h1> Articoli</h1>

    {{ $titolo ?? 'Titolo placeholder' }}
    <ul class="@if (false) text-danger @endif">
        <li><a href="{{ route('articoli') }}"> Articoli </a></li>
        <li><a href="{{ route('contatti') }}"> Contatti </a></li>
        <li><a href="{{ route('home') }}"> Home </a></li>

        <div class="container">
            <div class="row">
                @foreach ($articoli as $chiave => $articolo)
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{$articolo['titolo']}}</h5>
                            <h6 class="card-title">{{$articolo['nome']}}</h6>
                            <p class="card-text">{{$articolo['descrizione']}}</p>
                            <a href="{{route('articoli.dettaglio',['id'=>$chiave])}}" class="card-link">Dettaglio</a>
                        </div>
                    </div>
                @endforeach

               
            </div>
        </div>



    </ul>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
