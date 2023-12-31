<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('admin-only', function($user) {
            if ($user->role_id == 1) {
                return true;
            }
            return false;
        });

        Gate::define('admin-or-editor-only', function($user) {
            if ($user->role_id == 1 || $user->role_id ==2) {
                return true;
            }
            return false;
        });
        
        //
    }
}
