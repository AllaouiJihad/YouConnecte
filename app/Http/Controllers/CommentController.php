<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    //
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
    public function deleteComment($id)
    {
        $post = Comment::find($id);
        $post->delete();
        return redirect()->route('welcome');
    }
}
