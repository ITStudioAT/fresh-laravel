<?php

namespace Itstudioat\FreshLaravel;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Itstudioat\FreshLaravel\Commands\FreshLaravelCommand;

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
            ->hasViews();
    }

    public function boot()
    {
        // Publish config file
        $this->publishes([
            __DIR__ . '/../config/fresh-laravel.php' => config_path('fresh-laravel.php'),
        ], 'fresh-laravel-config');

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
        ], 'fresh-laravel-all');
    }
}
