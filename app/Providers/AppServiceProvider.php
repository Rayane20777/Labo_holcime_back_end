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
use App\Repositories\Implementations\PointEchantillonageRepository;
use App\Repositories\Interfaces\PointEchantillonageRepositoryInterface;
use App\Services\Implementations\PointEchantillonageService;
use App\Services\Interfaces\PointEchantillonageServiceInterface;
use App\Repositories\Implementations\AnalyseRepository;
use App\Repositories\Interfaces\AnalyseRepositoryInterface;
use App\Services\Implementations\AnalyseService;
use App\Services\Interfaces\AnalyseServiceInterface;
use App\Repositories\Implementations\ProportionRepository;
use App\Repositories\Interfaces\ProportionRepositoryInterface;
use App\Services\Implementations\ProportionService;
use App\Services\Interfaces\ProportionServiceInterface;
use App\Repositories\Implementations\PhaseGachageRepository;
use App\Repositories\Interfaces\PhaseGachageRepositoryInterface;
use App\Services\Implementations\PhaseGachageService;
use App\Services\Interfaces\PhaseGachageServiceInterface;


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
        $this->app->bind(DestinationServiceInterface::class, DestinationService::class);
        $this->app->bind(DestinationRepositoryInterface::class, DestinationRepository::class);
        $this->app->bind(PointEchantillonageServiceInterface::class, PointEchantillonageService::class);
        $this->app->bind(PointEchantillonageRepositoryInterface::class, PointEchantillonageRepository::class);
        $this->app->bind(AnalyseServiceInterface::class, AnalyseService::class);
        $this->app->bind(AnalyseRepositoryInterface::class, AnalyseRepository::class);
        $this->app->bind(ProportionServiceInterface::class, ProportionService::class);
        $this->app->bind(ProportionRepositoryInterface::class, ProportionRepository::class);
        $this->app->bind(PhaseGachageServiceInterface::class, PhaseGachageService::class);
        $this->app->bind(PhaseGachageRepositoryInterface::class, PhaseGachageRepository::class);
     }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
