<?php

declare(strict_types=1);

namespace App\Providers;

use App\Repositories\ApplianceRepository;
use App\Repositories\ApplianceRepositoryEloquent;
use App\Repositories\BrandRepository;
use App\Repositories\BrandRepositoryEloquent;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register()
    {
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->app->bind(BrandRepository::class, BrandRepositoryEloquent::class);
        $this->app->bind(ApplianceRepository::class, ApplianceRepositoryEloquent::class);
        // :end-bindings:
    }
}
