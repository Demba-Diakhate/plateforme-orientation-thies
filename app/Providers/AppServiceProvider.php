<?php

namespace App\Providers;

use App\Policies\AdminPolicy;
use App\Policies\CoachPolicy;
use App\Policies\EcolePolicy;
use App\Policies\FreelancePolicy;
use App\Policies\EntreprisePolicy;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
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
        Gate::define('access-admin', [AdminPolicy::class, 'accessAdmin']);
        Gate::define('is-coach', [CoachPolicy::class, 'isCoach']);
        Gate::define('is-entreprise', [EntreprisePolicy::class, 'isEntreprise']);
        Gate::define('is-freelance', [FreelancePolicy::class, 'isFreelance']);
        Gate::define('is-ecole-formation', [EcolePolicy::class, 'isEcoleFormation']);
    }
}
