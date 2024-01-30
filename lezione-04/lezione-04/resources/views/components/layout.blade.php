<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title ?? config('app.name')}}</title>
    @vite(['resources/css/app.css','resources/js/app.js'])


    </head>

<body>
    <img src="{{asset('download.jfif')}}" class="img-fluid" alt="...">
    <x-navbars.main/>
    <x-image alternativo="testo sostitutivo" />

    {{$slot}}

    <x-footer/>
    
</body>

</html>
