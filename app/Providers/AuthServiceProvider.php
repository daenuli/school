<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    protected $manage = 'manage-';
    public function boot()
    {
        $this->registerPolicies();
        Gate::define($this->manage.'users', function($user){
            return $user->role == 1;
        });
        Gate::define($this->manage.'donaturs', function($user){
            return $user->role == 1;
        });
        Gate::define($this->manage.'hafalans', function($user){
            return $user->role == 1 || $user->role == 2;
        });
        Gate::define($this->manage.'santris', function($user){
            return $user->role == 1 || $user->role == 3 || $user->role == 4;
        });
        Gate::define('button-santris', function($user){
            return $user->role == 1 || $user->role == 3;
        });
        Gate::define($this->manage.'gurus', function($user){
            return $user->role == 1 || $user->role == 3;
        });
        Gate::define($this->manage.'kelas', function($user){
            return $user->role == 1 || $user->role == 3;
        });
        Gate::define($this->manage.'spps', function($user){
            return $user->role == 1 || $user->role == 4;
        });
    }
}
