<x-layout>
    <x-success></x-success>
    <x-delete></x-delete>
    <form action="{{route('phone.store')}}" method="POST">
        @csrf

        <label for="number">Numero di telefono</label>
        <input type="tel" name="number" id="number">
        <button class="btn btn-primary" type="submit">Salva</button>
    </form>

    <a href="{{url()->previous()}}">Torna indetro</a>

</x-layout>