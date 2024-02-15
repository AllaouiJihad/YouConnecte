<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function store(Request $request){
        $post = new Post();
        $post->content = $request->input('content');
        $post->user_id = Auth::id();
        $post->save();
        return redirect()->route("welcome");
    }
    public function index(){
        $posts = Post::with('user')->get();
        // dd($posts);
        return view('home', compact('posts'));
    }
}
