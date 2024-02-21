<?php

namespace App\Http\Controllers;

use App\Models\Followe;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showProfile(){
        return view('profile_user');
    }
    public function profile(string $id){
        $posts = Post::with('user')->where('user_id',$id)->get();
        $follow = Followe::with('following')->where('user_follower',$id)->get();
        return view('profile_user', compact('posts','follow'));
    }
}
