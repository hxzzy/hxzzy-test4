<?php

namespace Zzy\Test;

use Illuminate\Support\ServiceProvider;

class TestServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/views', 'test');

        $this->publishes([
            __DIR__.'/views' => base_path('resources/views/vendor/test'),
            __DIR__.'/config/test.php' => config_path('test.php'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        /*$this->app['test'] = $this->app->share(function ($app) {
            return new test($app['session'], $app['config']);
        });*/
    }
    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['test'];
    }
}
