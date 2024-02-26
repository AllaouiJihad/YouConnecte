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
        $users = User::where('id', '!=', Auth::id())->with('followings')->get();
        return view('post',compact('post', 'users'));
    }

    public function addComment(Request $request){
        $comment = new Comment();
        $comment->content = $request->input('content');
        $comment->user_id = Auth::id();
        $comment->post_id = $request->input('post_id');
        $comment->save();
        
        Notification::create([
            'user_id' => $request->input('user_id'),
            'message' => Auth::user()->name. ' ' . 'has comment your post',
            
        ]);
        return redirect()->route("getPost",$comment->post_id);
    }

    public function addLike(Request $request){
        $like = Like::where('user_id',Auth::id())->where('post_id',$request->input('post_id'))->first();
       
        if($like){
            $like->delete();
        }
        else{
            $like = new Like();
            $like->user_id = Auth::id();
            $like->post_id = $request->input('post_id');
            $like->save();
            Notification::create([
                'user_id' => $request->input('user_id'),
                'message' => Auth::user()->name. ' ' . 'has liked your post',
                
            ]);
        }
        return redirect()->route("welcome");
    }
}
