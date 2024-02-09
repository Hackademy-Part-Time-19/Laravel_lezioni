<x-layout>

    
    <x-success/>
    <form action="{{ route('articles.store') }}" method="POST" class="mt-5 mx-auto col-lg-6">
        @csrf
        <h1>Crea il tuo articolo</h1>
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="title" >
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <input type="text" name="description" class="form-control" id="description">
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Categoria</label>
            <input type="text" name="category" class="form-control" id="category">
        </div>
        <button type="submit" class="btn btn-primary">Salva</button>

    </form>
</x-layout>
