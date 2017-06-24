<?php
namespace Hxzzy\Test4;

use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Router;
class Test2Serviceprovider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;
    public function boot()
    {
        $this->loadViewsFrom(realpath(__DIR__.'/../views'), 'test2');
        $this->setupRoutes($this->app->router);
        // this for conig
        $this->publishes([
            __DIR__.'/config/test2.php' => config_path('test2.php'),
        ]);
    }

    /**
     * Define the routes for the application.
     *
     * @param \Illuminate\Routing\Router $router
     * @return void
     */
    public function setupRoutes(Router $router)
    {
        $router->group(['namespace' => 'Hxzzy\Test4\Http\Controllers'], function($router)
        {
            require __DIR__.'/Http/routes.php';
        });
    }

    public function register()
    {
        $this->registerContact();
        config([
            'config/test2.php',
        ]);
    }
    private function registerContact()
    {
        $this->app->bind('test2',function($app){
            return new Test2($app);
        });
    }
}