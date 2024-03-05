<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Contracts\ {
	UserRepositoryInterface,
	ExemplaryRepositoryInterface
	};
use App\Repositories\{
	UserRepository,
	ExemplaryRepository
	};
use App\Services\{
    UserService,
    ExemplaryService
    };
use App\Services\Interfaces\{
    UserServiceInterface,
    ExemplaryServiceInterface
    };
use App\Services\Service;
use App\Services\Interfaces\ServiceInterface;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
    
    /*$this->app->bind(UserRepository::class, function ($app) { 
        return new UserRepository(new \App\Models\User);
    });
    */

	$this->app->bind(RepositoryInterface::class, Repository::class);

    $this->app->bind(ServiceInterface::class, Service::class);

    $this->app->bind(UserRepositoryInterface::class, UserRepository::class);

    $this->app->bind(UserServiceInterface::class, UserService::class);

    $this->app->bind(ExemplaryRepositoryInterface::class, ExemplaryRepository::class);
   
	$this->app->bind(ExemplaryServiceInterface::class, ExemplaryService::class);

    }
    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
