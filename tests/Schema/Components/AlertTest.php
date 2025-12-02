<?php

declare(strict_types=1);

use Filament\Facades\Filament;

it('renders alerts in style', function () {
    visit('/test/alert-playground')
        ->screenshotElement('.fi-page-content')
        ->assertScreenshotMatches();
});

it('renders alerts in dark style', function () {
    visit('/test/alert-playground')
        ->inDarkMode()
        ->screenshotElement('.fi-page-content')
        ->assertScreenshotMatches();
});

it('renders alerts in light style when panel has dark mode disabled', function () {
    Filament::getPanel('test')->darkMode(false);

    visit('/test/alert-playground')
        ->inDarkMode()
        ->screenshotElement('.fi-page-content')
        ->assertScreenshotMatches();
});
