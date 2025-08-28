<?php

namespace Superscript\FilamentAlertComponent;

use Filament\Support\Assets\Asset;
use Filament\Support\Assets\Css;
use Filament\Support\Facades\FilamentAsset;
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

    public function packageBooted(): void
    {
        // Asset Registration
        FilamentAsset::register(
            $this->getAssets(),
            $this->getAssetPackageName()
        );
    }

    protected function getAssetPackageName(): ?string
    {
        return 'gosuperscript/filament-alert-component';
    }

    /**
     * @return array<Asset>
     */
    protected function getAssets(): array
    {
        return [
            Css::make('filament-alert-component-styles', __DIR__ . '/../resources/dist/filament-alert-component.css'),
        ];
    }

    /**
     * @return array<string>
     */
    protected function getRoutes(): array
    {
        return [];
    }
}
