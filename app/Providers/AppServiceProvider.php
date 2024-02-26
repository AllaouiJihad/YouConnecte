<?php

namespace App\Providers;

use App\Models\Notification;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        Schema::defaultStringLength(191);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        view()->composer('*', function ($view) {
            
            
                $users = User::where('id', '!=', Auth::id())->with('followings')->get();
                $notifications = Notification::where('user_id',Auth::id())->get();
                $view->with('users', $users)->with('notifications', $notifications);
            
        });
    }
    }

