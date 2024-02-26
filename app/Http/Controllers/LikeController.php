<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
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
