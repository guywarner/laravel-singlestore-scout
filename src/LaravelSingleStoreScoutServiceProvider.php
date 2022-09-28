<?php

namespace Guywarner\LaravelSingleStoreScout;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Guywarner\LaravelSingleStoreScout\Commands\LaravelSingleStoreScoutCommand;

class LaravelSingleStoreScoutServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-singlestore-scout')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-singlestore-scout_table')
            ->hasCommand(LaravelSingleStoreScoutCommand::class);
    }
}
