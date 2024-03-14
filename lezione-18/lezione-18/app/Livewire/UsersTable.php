<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\On;

class UsersTable extends Component
{
    public $users;

    public function mount(){
        $this->users= User::all();
    }

    public function editStart($id){
        $this->dispatch('edit-user',user: $id); 
    }

    public function deleteUser(User $user){
        
        $user->delete();

        $this->getUsers();
    }

    #[On('edit-user')] 
    public function getUsers(){
        $this->users= User::all();
    }

    public function render()
    {
        return view('livewire.users-table');
    }
}
