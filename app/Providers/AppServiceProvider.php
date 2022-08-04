<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Employee;
use Illuminate\Support\Facades\Mail;
use App\Mail\Welcomeuser;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Employee::created(function( $user ){
            Mail::to($user)->send( new Welcomeuser($user) );
        });
    }
}
