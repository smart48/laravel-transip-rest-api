<?php

namespace Smart48\LaravelTransipRestAPI;

use Smart48\LaravelTransipRestAPI\Commands\LaravelTransipRestAPICommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelTransipRestAPIServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-transip-rest-api')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-transip-rest-api_table')
            ->hasCommand(LaravelTransipRestAPICommand::class);
    }
}
