<?php

namespace Gomee\Business\Providers;

use Illuminate\Support\ServiceProvider;

class BusinessServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../../views', 'busibess');

        // $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

        if ($this->app->runningInConsole()) {
            // $this->loadMigrationsFrom(__DIR__.'/../../database/migrations');

            $this->publishes([
                __DIR__ . '/../../database/migrations' => database_path('migrations'),
            ], 'busibess-migrations');

            $this->publishes([
                __DIR__ . '/../../views' => base_path('resources/views/vendor/business'),
            ], 'busibess-views');


            // $this->publishes([
            //     __DIR__.'/../config/passport.php' => config_path('passport.php'),
            // ], 'passport-config');

            // $this->commands([
            //     Console\InstallCommand::class,
            //     Console\ClientCommand::class,
            //     Console\HashCommand::class,
            //     Console\KeysCommand::class,
            //     Console\PurgeCommand::class,
            // ]);
        }
    }


    /**
     * Register Passport's migration files.
     *
     * @return void
     */
    protected function registerMigrations()
    {
        // if (Passport::$runsMigrations && ! config('passport.client_uuids')) {
        $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');
        // }
    }
}
