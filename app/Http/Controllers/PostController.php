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
    public function getPosts(){
        $posts = Post::where('user_id', Auth::id())->get();
        return view('profile', compact('posts'));
    }
    public function delete($id)
    {
        $post = post::find($id);
        $post->delete();
        return redirect()->route('profile');
    }


    public function update(Request $request, $id)
    {
        $post = Post::find($id);

        $request->validate([
            'content' => 'required',

        ]);

        $post->update([
            "content" => $request->content,

        ]);

        return redirect()->route('profile');
    }
}
