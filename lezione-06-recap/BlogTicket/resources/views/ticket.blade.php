<x-main-layout>


    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center"> Dettaglio ticket {{ $id }}</h1>
            </div>
            @if (session()->has('success'))
            <div class="col-12 mt-5 alert alert-success">
                {{session('success')}}
            </div> 
            @endif
            <div class="col-12 mt-5">
                <x-ticket-card :id="$id" :name="$ticket['name']" :date="$ticket['created_at']" :content="$ticket['status']"
                    :description="$ticket['description']">

                </x-ticket-card>
            </div>
            <form action="{{ route('send.email') }}" method="post">
                @csrf
                <input name="id" id="hidden" type="hidden" value="{{$id}}">
                <label for="answer">Risposta</label>
                <textarea name="answer" id="answer" cols="60" rows="8"></textarea>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

</x-main-layout>
