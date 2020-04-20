<?php

namespace App\Providers;

use App\CategorieTache;
use App\Enfant;
use App\Policies\CategorieTachePolicy;
use App\Policies\EnfantPolicy;
use App\Policies\ResponsablePolicy;
use App\Responsable;
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
        Enfant::class => EnfantPolicy::class,
        Responsable::class => ResponsablePolicy::class,
        CategorieTache::class => CategorieTachePolicy::class,

    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
