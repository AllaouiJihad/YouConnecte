<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showProfile(){
        return view('profile_user');
    }
    public function profile(string $id){
        $user = User::find($id)->with('posts');
        dd($user);
        return view('profile_user', compact('user'));
    }
}
