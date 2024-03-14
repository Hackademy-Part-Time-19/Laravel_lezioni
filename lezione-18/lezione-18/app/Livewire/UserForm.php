<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\Attributes\Validate;

class UserForm extends Component
{
    #[Validate('required', message:'Questo :attribute è richiesto')] 
    public $firstName;
    #[Validate('required', message:'Questo :attribute è richiesto')] 
    public $lastName;
    #[Validate('required', message:'Questo :attribute è richiesto')] 
    public $email;
    #[Validate('required', message:'Questo :attribute è richiesto')] 
    public $password;

    // public function rules(){
    //     return [
    //         'firstName'=>'required',
    //         'lastName'=>'min:30',
    //     ];
    // }

    // public function messages(){
    //     return[
    //         'firstName.required'=>'Il campo è richiesto',
    //         'lastName.min'=>'Il campo deve avere almeno 30 caratteri'
    //     ];

    // }

    public function store(){

        $this->validate();

        $name = $this->firstName . ' '. $this->lastName;
        $data =$this->only(['email','password']);
        $data['name'] = $name;
        User::create($data);

        session()->flash('success','Utente creato correttamente!');

    }

    #[On('edit-user')] 
    public function editUser(User $user){

        $this->validate();

        $name = $this->firstName . ' '. $this->lastName;
        $data =$this->only(['email','password']);
        $data['name'] = $name;

        $user->update($data);

        session()->flash('success','Utente aggiornato correttamente!');
    }

    public function resetForm(){
        $this->reset();
    }
    
    public function render()
    {
        return view('livewire.user-form');
    }
}
