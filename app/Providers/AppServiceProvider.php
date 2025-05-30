<?php

namespace App\Providers;

use App\Events\UserRegister;
use App\Events\UserRegistered;
use App\Listeners\LogUserRegister;
use App\Listeners\LogUserRegisteration;
use App\Models\User;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{

    protected $listen = [
        UserRegister::class => [
            LogUserRegister::class,
        ],
    ];
    
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
    }
}
