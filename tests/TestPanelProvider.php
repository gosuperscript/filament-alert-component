<?php

declare(strict_types=1);

namespace Superscript\FilamentAlertComponent\Tests;

use Filament\Panel;
use Filament\PanelProvider;
use Superscript\FilamentAlertComponent\Tests\Schema\Components\AlertPlayground;

final class TestPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->id('test')
            ->path('test')
            ->pages([
                AlertPlayground::class,
            ]);
    }
}
