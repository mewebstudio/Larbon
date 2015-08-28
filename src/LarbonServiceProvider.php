<?php

namespace Mews\Larbon;

use Illuminate\Support\ServiceProvider;

/**
 * Class LarbonServiceProvider
 * @package Mews\Larbon
 */
class LarbonServiceProvider extends ServiceProvider {

    /**
     * Boot the service provider.
     *
     * @return null
     */
    public function boot()
    {
        //
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        // Bind Larbon
        $this->app->bind('larbon', function($app)
        {
            return new Larbon(
                $app['Illuminate\Config\Repository'],
                $app['Carbon\Carbon']
            );
        });
    }

}
