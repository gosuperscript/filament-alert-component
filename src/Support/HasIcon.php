<?php

declare(strict_types=1);

namespace Superscript\FilamentAlertComponent\Support;

use Illuminate\Contracts\Support\Htmlable;

trait HasIcon
{
    use \Filament\Support\Concerns\HasIcon {
        getIcon as getBaseIcon;
    }

    public function getIcon(): string | Htmlable | null
    {
        return $this->getBaseIcon() ?? match ($this->getStatus()) {
            'danger' => $default ?? 'heroicon-o-x-circle',
            'info' => $default ?? 'heroicon-o-information-circle',
            'success' => $default ?? 'heroicon-o-check-circle',
            'warning' => $default ?? 'heroicon-o-exclamation-circle',
            default => null,
        };
    }
}
