<x-layout>
    <h1>Benvenuto, {{auth()->user()->name}}</h1>

    <a href="{{route('phone.create')}}"><button class="btn btn-primary">Inserisci il tuo numero di telefono</button></a>
</x-layout>