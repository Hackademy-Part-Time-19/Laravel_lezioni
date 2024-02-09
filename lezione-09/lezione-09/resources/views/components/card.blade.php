<div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">{{$name}}</h5>
        <h6 class="card-title">{{$title}}</h6>
        <p class="card-text">{{$description}}</p>
        <a href="{{route('articles.show',['id'=>$id])}}" class="card-link">Card link</a>
        
        
    </div>
</div>