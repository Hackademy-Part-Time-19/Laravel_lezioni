<div>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($users as $user)
          <tr>
            <th scope="row">{{$user->name}}</th>
            <td colspan="2">{{$user->email}}</td>
            <td>
                <button class="btn btn-small btn-primary" wire:click="editStart({{$user->id}})" >Modifica</button>
                <button class="btn btn-small btn-danger" wire:click="deleteUser({{$user->id}})">Elimina</button>
            </td>
          </tr>
          @endforeach
          
        </tbody>
      </table>
</div>
