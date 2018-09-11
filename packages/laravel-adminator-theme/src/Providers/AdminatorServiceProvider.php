<?php

namespace Ijpatricio\Adminator\Providers;

use Illuminate\Support\ServiceProvider;

class AdminatorServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Boot the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../../resources/views' => resource_path('views/vendor/adminator'),
        ], 'adminator');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->registerViews();
    }

    /**
     * Register config.
     *
     * @return void
     */
    protected function registerConfig()
    {
        //
    }

    /**
     * Register views.
     *
     * @return void
     */
    public function registerViews()
    {
        $this->loadViewsFrom(__DIR__ . '/../../resources/views' , 'adminator');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }
}
