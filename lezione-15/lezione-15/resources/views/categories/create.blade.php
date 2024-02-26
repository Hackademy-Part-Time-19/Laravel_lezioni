<x-layout>
    <x-success></x-success>
    <x-delete></x-delete>
    <form action="{{route('categories.store')}}" method="POST">
        @csrf

        <label for="name">Nome categoria</label>
        <input type="text" name="name" id="name">
        <button class="btn btn-primary" type="submit">Salva</button>
    </form>

</x-layout>