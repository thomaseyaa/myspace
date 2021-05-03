<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Carbon;

class Post extends Component
{
    public $post;
    public $name;
    public $date;

    public function mount($post)
    {
        $this->post = $post;
        $this->date = Carbon::parse($post->created_at)->diffForHumans();
    }

    public function render()
    {
        return view('livewire.post');
    }
}
