<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    //
    public function addNotification(Request $request)
    {
        $user_id = $request->user()->id;
    
        Notification::create([
            'user_id' => $user_id,
            'is_read' => null,
            'message' => $request->message,
        ]);
    
                return redirect()->route('welcome');        
        
    }
    
    public function deleteNotification(Request $request)
    {
        $notificationId = $request->id;
        $notification = Notification::find($notificationId);
    
        if ($notification) {
            $notification->delete();
        }
    
        return redirect()->route('welcome');
    
    }
}
