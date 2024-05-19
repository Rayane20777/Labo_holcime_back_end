<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Implementations\UserRepository;
use App\Repositories\Interfaces\UserRepositoryInterface;
use App\Services\Implementations\UserService;
use App\Services\Interfaces\UserServiceInterface;
use App\Repositories\Implementations\MatiereRepository;
use App\Repositories\Interfaces\MatiereRepositoryInterface;
use App\Services\Implementations\MatiereService;
use App\Services\Interfaces\MatiereServiceInterface;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(UserServiceInterface::class, UserService::class);
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
        $this->app->bind(MatiereServiceInterface::class, MatiereService::class);
        $this->app->bind(MatiereRepositoryInterface::class, MatiereRepository::class);

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
