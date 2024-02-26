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
        $data=[
            'user'=>$user,
            'posts'=>$posts
        ];
        return view('profile_user', $data);
    }

    public function searchUsers(Request $request)
    {
        $name = $request->input('name');
        if ($name === '') {
            $users = User::where('status', 'active')->get();
        } else {

            $users = User::where('name', 'like', '%' . $name . '%')
                ->get();
        }

        return view('searchresult')->with(['users' => $users, 'keyword' => $name]);
    }
}
