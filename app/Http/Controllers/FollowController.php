<?php

namespace App\Http\Controllers;

use App\Models\Followe;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FollowController extends Controller
{
    public function addFollow($id){

        $follow=followe::create([
              'user_follower'=>$id,
              'user_auth'=>Auth::id()
        ]);
        if($follow){
            return redirect()->back()->with('success', 'Followed successfully');
        }else{
            return redirect()->back()->with('danger', 'Followed unsuccessfully');
        }
        // $follow = User::with('followers')->pluck('id');
        // dd($follow);
        // $follow = Followe::with('following')->where('user_follower',$request->id)->get();
        
        // if($follow != null){
        //     // $follower = Followe::where('user_follower',)

        //     $follow->delete();
        // }
        // else{
        //     $follow = new Followe();
        //     $follow->user_auth = Auth::id();
        //     $follow->user_follower = $request->id;
        //     $follow->save();
        // }
    }
    public function deleteFollow($id){
 
        $follow=followe::where('user_follower',$id)->where('user_auth',Auth::id())->first();
        if($follow){
            $follow->delete();
            return redirect()->back()->with('success', 'unFollowed successfully');
        }else{
            return redirect()->back()->with('danger', 'unFollowed unsuccessfully');
        }
    }
}
