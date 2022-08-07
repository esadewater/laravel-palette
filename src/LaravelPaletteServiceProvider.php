<?php

namespace Esadewater\LaravelPalette;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Esadewater\LaravelPalette\Commands\LaravelPaletteCommand;

class LaravelPaletteServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-palette')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-palette_table')
            ->hasCommand(LaravelPaletteCommand::class);
    }
}
