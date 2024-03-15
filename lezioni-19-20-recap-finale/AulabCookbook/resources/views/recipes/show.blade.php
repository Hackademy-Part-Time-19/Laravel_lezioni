<x-layouts.main>
    <h1>Elenco di tutte le ricette</h1>

    <div class="container">
        
        <div class="card">
            <div class="card-body">
                <p> {{$recipe->name}}</p>
                <div class="container">
                    <div class="row">
                        <p>
                            {{$recipe->time}}
                        </p>
                        <p> {{$recipe->body}}</p>
                    </div>
                </div>
                
                <form action="{{route('recipes.destroy',['recipe'=>$recipe->id])}}" method="POST">@csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Cancella</button></form>
            </div>
          </div>
          
          

    </div>

</x-layouts.main>