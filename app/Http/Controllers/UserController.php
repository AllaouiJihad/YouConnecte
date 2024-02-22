<?php

namespace App\Http\Controllers;

use App\Models\Followe;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
  // public function showProfile(){
    //     return view('profile_user');
    // }
    public function profile($id){
        $user=User::with('followings')->find($id);
        $posts = Post::with('user')->where('user_id',$id)->get();
        $data=[
            'user'=>$user,
            'posts'=>$posts
        ];
        return view('profile_user', $data);
    }
}
