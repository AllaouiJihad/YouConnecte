<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    public $timestamps=false;
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    public function post(){
        return $this->hasMany(User::class);
    }
    public function comment(){
        return $this->hasMany(User::class);
    }
    public function likes(){
        return $this->hasMany(Like::class);
    }
     public function followers()
    {
        return $this->belongsToMany(User::class, 'Follower', 'following_id', 'follower_id');
    }

    /**
     * Get the users that the user is following.
     */
    public function following()
    {
        return $this->belongsToMany(User::class, 'Follower', 'follower_id', 'following_id');
    }

}
