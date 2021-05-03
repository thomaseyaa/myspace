<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('home', [
            'posts' => Post::get()
        ]);
    }

    public function createPost(Request $request)
    {
        $request->validate(['body' => 'required|min:6']);

        auth()->user()->posts()->create(['body' => $request->body]);

        return redirect(route('home'));
    }
}
