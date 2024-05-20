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
use App\Repositories\Implementations\DestinationRepository;
use App\Repositories\Interfaces\DestinationRepositoryInterface;
use App\Services\Implementations\DestinationService;
use App\Services\Interfaces\DestinationServiceInterface;


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
        $this->app->bind(DestinationServiceInterface::class, DestinationService::class);$this->app->bind(DestinationRepositoryInterface::class, DestinationRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
