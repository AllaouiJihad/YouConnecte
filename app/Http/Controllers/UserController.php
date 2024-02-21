<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Follower;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */


public function index()
{
    $users = User::where('id', '!=', auth()->id())->get();
    return view('layouts.app', ['users' => $users]);
}
public function follow(User $user)
{
    auth()->user()->user()->attach($user->id);
    return redirect()->back();
}

public function unfollow(User $user)
{
    auth()->user()->followers()->detach($user->id);
    return redirect()->back();
}
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
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
