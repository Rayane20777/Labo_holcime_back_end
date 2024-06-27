<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use App\Models\User;

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
use App\Services\Interfaces\PhaseTempsPriseServiceInterface;
use App\Repositories\Implementations\PhaseTempsPriseRepository;
use App\Repositories\Interfaces\PhaseTempsPriseRepositoryInterface;
use App\Services\Implementations\PhaseTempsPriseService;
use App\Services\Interfaces\ResultatAnalysePhysiqueServiceInterface;
use App\Repositories\Implementations\ResultatAnalysePhysiqueRepository;
use App\Repositories\Interfaces\ResultatAnalysePhysiqueRepositoryInterface;
use App\Services\Implementations\ResultatAnalysePhysiqueService;
use App\Services\Interfaces\AnalyseChimiqueServiceInterface;
use App\Repositories\Implementations\AnalyseChimiqueRepository;
use App\Repositories\Interfaces\AnalyseChimiqueRepositoryInterface;
use App\Services\Implementations\AnalyseChimiqueService;
use App\Services\Interfaces\XrfServiceInterface;
use App\Repositories\Implementations\XrfRepository;
use App\Repositories\Interfaces\XrfRepositoryInterface;
use App\Services\Implementations\XrfService;
use App\Services\Interfaces\XrdServiceInterface;
use App\Repositories\Implementations\XrdRepository;
use App\Repositories\Interfaces\XrdRepositoryInterface;
use App\Services\Implementations\XrdService;
use App\Services\Interfaces\RoleServiceInterface;
use App\Repositories\Implementations\RoleRepository;
use App\Repositories\Interfaces\RoleRepositoryInterface;
use App\Services\Implementations\RoleService;

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
        $this->app->bind(PhaseTempsPriseServiceInterface::class, PhaseTempsPriseService::class);
        $this->app->bind(PhaseTempsPriseRepositoryInterface::class, PhaseTempsPriseRepository::class);
        $this->app->bind(ResultatAnalysePhysiqueServiceInterface::class, ResultatAnalysePhysiqueService::class);
        $this->app->bind(ResultatAnalysePhysiqueRepositoryInterface::class, ResultatAnalysePhysiqueRepository::class);
        $this->app->bind(AnalyseChimiqueServiceInterface::class, AnalyseChimiqueService::class);
        $this->app->bind(AnalyseChimiqueRepositoryInterface::class, AnalyseChimiqueRepository::class);
        $this->app->bind(XrfServiceInterface::class, XrfService::class);
        $this->app->bind(XrfRepositoryInterface::class, XrfRepository::class);
        $this->app->bind(XrdServiceInterface::class, XrdService::class);
        $this->app->bind(XrdRepositoryInterface::class, XrdRepository::class);
        $this->app->bind(RoleServiceInterface::class, RoleService::class);
        $this->app->bind(RoleRepositoryInterface::class, RoleRepository::class);
  }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Gate::define("admin", fn(User $user) => $user->hasRole('admin'));
        // Gate::define("doctor", fn(User $user) => $user->hasRole('doctor'));
        // Gate::define("member", fn(User $user) => $user->hasRole('admin'));
        // Gate::define("secretary", fn(User $user) => $user->hasRole('admin'));

        Gate::define('super_admin', fn(User $user) => $user->role == 'super_admin');
        Gate::define('admin', fn(User $user) => $user->role == 'admin');
        Gate::define('user', fn(User $user) => $user->role == 'user');
    }
}
