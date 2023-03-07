<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\User;
use Illuminate\Auth\Access\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate as FacadesGate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
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

        FacadesGate::define('isAdmin',function(User $user){
            return $user->role == "admin";
        });
        FacadesGate::define('isApprenant',function(User $user){
            return $user->role == "apprenant";
        });
        FacadesGate::define('isFormateur',function(User $user){
            return $user->role == "formateur";
        });
        FacadesGate::define('isFormateurOrAdmin',function(User $user){
            if($user->role =="admin"){
            return $user->role == "admin";
        }else{
            return $user->role == "formateur";
        }
        });
    }
}
