<x-layout>
    <x-success></x-success>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mx-auto">
                <form class="mt-5" action="{{ route('books.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <h1>Inserisci un libro</h1>
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo</label>
                        <input name="title" type="text" class="form-control" id="title"
                            value="{{ old('title') }}">
                    </div>
                    @error('title')
                        <span class="text-danger"> {{ $message }}</span>
                    @enderror

                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo</label>
                        <input name="price" type="number" class="form-control" id="price"
                            value="{{ old('price') }}">
                    </div>
                    @error('price')
                        <span class="text-danger"> {{ $message }}</span>
                    @enderror

                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione</label>
                        <input name="description" type="text" class="form-control" id="description"
                            value="{{ old('description') }}">
                    </div>
                    @error('description')
                        <span class="text-danger"> {{ $message }}</span>
                    @enderror

                    <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                        @foreach ($genres as $genre)
                            <input name="genres[]" type="checkbox" class="btn-check" id="btncheck{{$genre->id}}" autocomplete="off" value="{{$genre->id}}">
                            <label class="btn btn-outline-primary" for="btncheck{{$genre->id}}">{{$genre->name}}</label>
                        @endforeach
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">Immagine</label>
                        <input name="image" type="file" class="form-control" id="image">
                    </div>
                    @error('image')
                        <span class="text-danger"> {{ $message }}</span>
                    @enderror

                    <button type="submit" class="btn btn-primary">Salva</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
