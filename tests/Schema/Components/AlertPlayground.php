<?php

declare(strict_types=1);

namespace Superscript\FilamentAlertComponent\Tests\Schema\Components;

use Filament\Pages\Page;
use Filament\Schemas\Schema;
use Filament\Support\Enums\Width;
use Superscript\FilamentAlertComponent\Schema\Components\Alert;

final class AlertPlayground extends Page
{
    protected Width | string | null $maxContentWidth = Width::ScreenSmall;

    public function content(Schema $schema): Schema
    {
        return $schema
            ->components([
                Alert::make('An info alert')
                    ->description('My test description')
                    ->info(),

                Alert::make('A warning alert')
                    ->description('My test description')
                    ->warning(),

                Alert::make('A danger alert')
                    ->description('My test description')
                    ->danger(),

                Alert::make('A success alert')
                    ->description('My test description')
                    ->success(),
            ]);
    }
}
