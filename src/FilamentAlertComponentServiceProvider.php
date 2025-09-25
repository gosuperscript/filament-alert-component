<?php

namespace Superscript\FilamentAlertComponent;

use Spatie\LaravelPackageTools\Commands\InstallCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentAlertComponentServiceProvider extends PackageServiceProvider
{
    public static string $name = 'filament-alert-component';

    public static string $viewNamespace = 'filament-alert-component';

    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package->name(static::$name)
            ->hasInstallCommand(function (InstallCommand $command) {
                $command
                    ->askToStarRepoOnGitHub('gosuperscript/filament-alert-component');
            });

        $package->hasViews(static::$viewNamespace);
    }

    public function packageRegistered(): void {}

    /**
     * @return array<string>
     */
    protected function getRoutes(): array
    {
        return [];
    }
}
