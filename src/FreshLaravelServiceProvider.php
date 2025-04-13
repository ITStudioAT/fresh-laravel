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


        // Publish all together under a general tag
        $this->publishes([
            __DIR__ . '/../config/fresh-laravel.php' => config_path('fresh-laravel.php'),
        ], 'fresh-laravel-all');
    }
}
