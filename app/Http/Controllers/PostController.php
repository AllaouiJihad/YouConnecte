<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Like;
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
        $posts = Post::with('user')->with('likes')->get();
        foreach($posts as $post){
            $likes = Like::where('post_id',$post->id)->count();
        }
        
        return view('home', compact('posts', 'likes'));
    }
    public function getPosts(){
        $posts = Post::with('likes')->where('user_id', Auth::id())->get();
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
    public function getPost(string $id){
        $post = Post::with('comments')->where('id', $id)->first();
        // dd($post); 
        return view('post',compact('post'));
    }

    public function addComment(Request $request){
        $comment = new Comment();
        $comment->content = $request->input('content');
        $comment->user_id = Auth::id();
        $comment->post_id = $request->input('post_id');
        $comment->save();
        return redirect()->route("getPost",$comment->post_id);
    }

    public function addLike($id){
        $like = new Like();
        $like->user_id = Auth::id();
        $like->post_id = $id;
        $like->save();
        return redirect()->route("welcome");
    }
}
