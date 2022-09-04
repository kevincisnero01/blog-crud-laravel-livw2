<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;
use Livewire\WithPagination;

class PostComponent extends Component
{
    use WithPagination;
    
    public function render()
    {
        return view('livewire.post-component',[
            'posts' => Post::OrderBy('id')->paginate(8)
        ]);
    }
}
