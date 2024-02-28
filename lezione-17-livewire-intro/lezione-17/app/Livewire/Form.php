<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Form extends Component
{
    public $title="";
    public $description="";

    public function mount(){
    }

    public function render()
    {
        
        return view('livewire.form',compact('users'));
    }
}
