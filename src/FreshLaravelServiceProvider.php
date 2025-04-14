<?php

namespace Itstudioat\FreshLaravel;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;


class FreshLaravelServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('fresh-laravel')
            ->hasConfigFile('fresh-laravel')
            ->hasViews('homepage')
            ->hasCommand(\Itstudioat\FreshLaravel\Commands\FreshLaravelInstall::class);
    }

    public function boot()
    {

        if ($this->app->runningInConsole()) {
            $this->commands([
                \Itstudioat\FreshLaravel\Commands\FreshLaravelInstall::class,
            ]);
        }

        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');

        // Publish config file
        $this->publishes([
            __DIR__ . '/../config/fresh-laravel.php' => config_path('fresh-laravel.php'),
        ], 'fresh-laravel-config');

        $this->publishes([
            __DIR__ . '/../src/Commands/FreshLaravelInstall.php' => base_path('app/Console/Commands/FreshLaravelInstall.php'),
        ], 'fresh-laravel-commands');

        $this->publishes([
            __DIR__ . '/../resources/views/homepage.blade.php' => base_path('resources/views/homepage.blade.php'),
        ], 'fresh-laravel-views');

        // Publish Vite assets (JS, CSS)
        $this->publishes([
            __DIR__ . '/../resources/js' => public_path('vendor/fresh-laravel/js'),
            __DIR__ . '/../resources/css' => public_path('vendor/fresh-laravel/css'),
            __DIR__ . '/../vite.config.js' => base_path('vite.config.js'),
        ], 'fresh-laravel-assets');


        // Publish all together under a general tag
        $this->publishes([
            __DIR__ . '/../config/fresh-laravel.php' => config_path('fresh-laravel.php'),
            __DIR__ . '/../resources/js' => public_path('vendor/fresh-laravel/js'),
            __DIR__ . '/../resources/css' => public_path('vendor/fresh-laravel/css'),
            __DIR__ . '/../vite.config.js' => base_path('vite.config.js'),
            __DIR__ . '/../README.MD' => base_path('README.MD'),
            __DIR__ . '/../src/Commands/FreshLaravelInstall.php' => base_path('app/Console/Commands/FreshLaravelInstall.php'),
            __DIR__ . '/../resources/views/homepage.blade.php' => base_path('resources/views/homepage.blade.php'),
        ], 'fresh-laravel-all');
    }

    public function packageRegistered() {}
}
