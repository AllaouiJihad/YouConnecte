<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Like;
use App\Models\Notification;
use App\Models\Post;
use App\Models\User;
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
       
        // $users = User::where('id', '!=', Auth::id())->with('followings')->get();
        // $notifications = Notification::where('user_id',Auth::id())->get();
        $like_count=[];
        foreach($posts as $post){
            $like_count[$post->id] = Like::where('post_id',$post->id)->count();
        }
        
        return view('home', compact('posts', 'like_count'));
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



    public function getPost(string $id){
        $post = Post::with('comments')->where('id', $id)->first();
        // dd($post); 
        $users = User::where('id', '!=', Auth::id())->with('followings')->get();
        return view('post',compact('post', 'users'));
    }

    

    

    public function edit(Post $post)
    {
        // Assuming you have an 'edit' view to display the edit form
        return view('posts.edit', compact('post'));
    }

    public function modifierPost(Request $request, Post $post)
    {
        // Validate the request data
        $request->validate([
            'content' => 'required|string',
        ]);

        // Update the post content
        $post->content = $request->input('content');
        $post->save();

        // Redirect back or wherever you need to go
        return redirect()->route('profile')->with('success', 'Post updated successfully');
    }
    

}
