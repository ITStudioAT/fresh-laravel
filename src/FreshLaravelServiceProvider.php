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
            ->hasConfigFile(['fresh-laravel'])
            ->hasViews()
            ->hasMigration('create_fresh_laravel_table')
            ->hasCommand(FreshLaravelCommand::class);
    }
}
