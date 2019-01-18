<?php

namespace App\Providers;

use App\Complaint;
use App\User;
use App\Division;
use App\Policies\ComplaintPolicy;
use App\Policies\DivisionPolicy;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    // protected $policies = [
    //     'App\Model' => 'App\Policies\ModelPolicy',
    // ];
    protected $policies = [
        //'App\Model' => 'App\Policies\ModelPolicy',
        '\Complaint' => ComplaintPolicy::class,
        Division::class => DivisionPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('viewD', 'App\Policies\DivisionPolicy@admin_only1');

        Gate::define('adminonly', function($user){
            return $user->role === "admin";
        });
        // Gate::define('viewD', function($user){
        //     return $user->role == 'admin';
        // });

        //Gate::define('view', 'App\Policies\ComplaintPolicy@view');
        /*Gate::define('viewD', function($user){
            if($user->role == 'admin'){
                return true;
            }
            else{
                return false;
            }
        });*/
    }
}
