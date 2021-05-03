<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class Posts extends Component
{
    protected $listeners = ['echo:posts,PostAdded' => "postAdded"];

    public $posts;

    public function postAdded($post)
    {
        $this->posts->prepend(Post::find($post['id']));

        session()->flash('status', "Post created");
    }

    public function mount()
    {
        $this->posts = Post::latest()->get();
    }

    public function render()
    {
        return view('livewire.posts');
    }
}
