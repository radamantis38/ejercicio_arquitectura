<?php

namespace App\Providers;

use App\Repositories\EloquentMovieRepository;
use App\Repositories\Interfaces\MovieRepositoryInterface;
use App\UseCases\Interfaces\MovieListUseCaseInterface;
use App\UseCases\MovieListUseCase;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    protected $classes = [
        MovieRepositoryInterface::class => EloquentMovieRepository::class,
        MovieListUseCaseInterface::class => MovieListUseCase::class
    ];

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        foreach ($this->classes as $abstract => $concrete) {
            $this->app->bind($abstract, function () use ($concrete) {
                return app($concrete);
            });
        }
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
