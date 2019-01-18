<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Gate;
use App\Complaint;
use App\Policies\ComplaintPolicy;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */

    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
        //Complaint::class => ComplaintPolicy::class,
    ];
    public function boot()
    {
       
        Schema::defaultStringLength(191);
         

        // Gate::define('complaint', function($userid, $complaintuid){
        //     return $userid->id == $complaintuid->user_id;
        // });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
