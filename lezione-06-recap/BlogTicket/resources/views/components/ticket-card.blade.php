<div class="card">
    <div class="card-header">
        Ticket {{$id}}
    </div>
    <div class="card-body">
        <h5 class="card-title">Aperto da {{$name}} il {{$date}}</h5>
        <div class="card-text" style="width:100px;"><p class="@if($content=='aperto')bg-success @else bg-danger @endif">{{$content}}</p></div>
        <p class="card-text">{{$description ?? ''}}</p>
        <a href="{{route('ticket.show',compact('id'))}}" class="btn btn-primary">Rispondi</a>
    </div>
</div>

