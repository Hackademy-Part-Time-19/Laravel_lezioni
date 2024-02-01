<x-layout>
    <h1> Contattaci tramite il form!</h1>
    
    <x-success/>
    
    @if(session()->has('error'))
    <h2 class="alert alert-danger">{{session('error')}}</h2>

    @endif  

    <form  action="{{route('contact.send')}}"  method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input name="name" type="name" class="form-control" id="name">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input name="email" type="email" class="form-control" id="email">
          </div>
          <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <input name="description" type="text" class="form-control" id="description">
          </div>
          <div class="mb-3">
            <label for="address" class="form-label">Indirizzo</label>
            <input name="address" type="text" class="form-control" id="address">
          </div>
          
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>


</x-layout>