<?php

namespace App\Providers;

use App\Repositories\Impl\StaffRepositoryImpl;
use App\Repositories\StaffRespository;
use App\Services\Impl\StaffServiceImpl;
use App\Services\StaffService;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;
use Override;

class StaffServiceProvider extends ServiceProvider implements DeferrableProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(StaffService::class, StaffServiceImpl::class);
        $this->app->singleton(StaffRespository::class, StaffRepositoryImpl::class);
    }

    #[Override]
    public function provides()
    {
        return [
            StaffService::class, 
            StaffRespository::class
        ];
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
