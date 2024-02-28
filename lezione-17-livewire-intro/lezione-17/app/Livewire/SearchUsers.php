<?php

namespace App\Livewire;

use App\Models\Post;
use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Url;
use Livewire\WithPagination;
use Livewire\WithoutUrlPagination;

class SearchUsers extends Component
{
    use WithPagination;

    public $users;

    // #[Url]
    public $search="";

    public function render()
    {
        if($this->search==""){

            $this->users = Post::paginate(10);
        }else{
            $this->users= Post::where('name','like','%'.$this->search.'%')->orWhere('email','like','%'.$this->search.'%')->orderBy('name','ASC')->paginate(10);
        }
        
        return view('livewire.search-users');
    }
}
