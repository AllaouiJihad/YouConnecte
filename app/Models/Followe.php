<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Followe extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_auth',
        'user_follower',
    ];
    public function user(){
        return $this->belongsTo(User::class, 'user_auth');
    }
    public function following(){
        return $this->belongsTo(User::class, 'user_follower');
    }
}
