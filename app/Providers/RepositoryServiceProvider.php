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
use App\Services\UserService;
use App\Services\Interfaces\UserServiceInterface;
use App\Services\Service;
use App\Services\Interfaces\ServiceInterface;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
	$this->app->bind(UserRepositoryInterface::class, UserRepository::class);

	$this->app->bind(ExemplaryRepositoryInterface::class, ExemplaryRepository::class);
   
	$this->app->bind(UserServiceInterface::class, UserService::class);

    $this->app->bind(ServiceInterface::class , Service::class);

    }
    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
