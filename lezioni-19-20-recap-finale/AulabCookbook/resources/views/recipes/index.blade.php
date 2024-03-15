<x-layouts.main>

    <livewire:counter/>
    <h1>Elenco di tutte le ricette</h1>

    <div class="container">
        @foreach($recipes as $recipe)
        <div class="card">
            <div class="card-body">
                <img src="{{Storage::url($recipe->image)}}" alt="Test" style="width:200px;">
                <p> {{$recipe->name}}</p>
                <p>
                    {{$recipe->time}}
                </p>
                {{-- @if($recipe->course)
                <p>
                   Portata: {{$recipe->course->name}}
                </p>
                @endif --}}

                @if($recipe->courses)
                <p>Portata:</p>
                @foreach ($recipe->courses as $course)
                <p>
                     {{$course->name}}
                 </p>
                @endforeach
                @endif
                <button class="btn btn-secondary"><a href="{{route('recipes.show',['recipe'=>$recipe->id])}}"> Dettaglio</a></button>
                <form action="{{route('recipes.destroy',['recipe'=>$recipe->id])}}" method="POST">@csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Cancella</button></form>
            </div>
          </div>
          
          
        @endforeach
    </div>

</x-layouts.main>