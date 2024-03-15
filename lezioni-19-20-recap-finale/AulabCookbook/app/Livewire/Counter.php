<?php

namespace App\Livewire;

use App\Models\Recipe;
use Livewire\Component;

class Counter extends Component
{
    public $counter=0;
    public $search="";

    public function add(){
        $this->counter++;
    }

    public function sub(){
        $this->counter--;
    }

    public function mount(){
        
    }

    public function render()
    {
        return view('livewire.counter',['recipes'=> Recipe::where('name','LIKE','%'.$this->search .'%')->get()]);
    }
}
