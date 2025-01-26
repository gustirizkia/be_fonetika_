<?php

namespace App\Providers;

use App\Repositories\ArtikelRepository\ArtikelRepository;
use App\Repositories\ArtikelRepository\ArtikelRepositoryInterface;
use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Model;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(ArtikelRepositoryInterface::class, ArtikelRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Model::unguard();
    }
}
