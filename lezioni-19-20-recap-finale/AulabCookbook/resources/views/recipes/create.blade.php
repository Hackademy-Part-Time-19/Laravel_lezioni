<x-layouts.main>
    <h1>Crea la tua ricetta</h1>
    <form action="{{ route('recipes.store') }}" method="POST" class="mx-5" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nome della ricetta</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">
            <div id="emailHelp" class="form-text"></div>
        </div>
        @error('name')
        <p class="text-danger">{{$message}}</p>
        @enderror
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Corpo della ricetta</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="body">
        </div>
        @error('body')
            <p class="text-danger">{{$message}}</p>
        @enderror
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Durata della ricetta</label>
            <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="time">

        </div>
        @error('time')
        <p class="text-danger">{{$message}}</p>
        @enderror
        <label for="portata">Portata</label>

        {{-- <select class="form-select" id="portata" aria-label="Default select example" name="course_id">
            @foreach ($courses as $course)
                <option value="{{$course->id}}">{{$course->name}}</option>
                
            @endforeach
          </select> --}}
          <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
            @foreach ($courses as $course)
                <input type="checkbox" class="btn-check" id="btncheck{{$course->id}}" autocomplete="off" name="courses[]" value="{{$course->id}}">
                <label class="btn btn-outline-primary" for="btncheck{{$course->id}}">{{$course->name}}</label>
            @endforeach
          </div>

          <label for="image" class="form-label">Copertina</label>
          <input type="file" id="image" name="image">
         
        <button type="submit" class="btn btn-primary">Crea ricetta</button>
    </form>
</x-layouts.main>
