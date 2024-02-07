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

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
	$this->app->bind(UserRepositoryInterface::class, UserRepository::class);

	$this->app->bind(ExemplaryRepositoryInterface::class, ExemplaryRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
