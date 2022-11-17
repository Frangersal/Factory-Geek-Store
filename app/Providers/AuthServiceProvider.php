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

        //Solo un usuario Admin y buyer pueden ser manejadores-usuarios
        Gate::define(
            'manage-users', function($user){
            return $user->hasAnyRoles(['admin','buyer']);
        });

        //Solo un usuario Admin puede editar-usuarios
        Gate::define(
            'edit-users', function($user){
            return $user->hasRole('admin');
        });

        //Solo un usuario Admin puede eliminar-usuarios
        Gate::define(
            'delete-users', function($user){
            return $user->hasRole('admin');
        });

        //------------------ Acciones ------------------//

        //Acciones exclusivas de Administrador
        Gate::define(
            'buyer-action', function($user){
            return $user->hasRole('admin');
        });

        //Acciones exclusivas de buyer
        Gate::define(
            'admin-action', function($user){
            return $user->hasRole('buyer');
        });

        //------------------ Acciones ------------------//
        

        
    }
}
