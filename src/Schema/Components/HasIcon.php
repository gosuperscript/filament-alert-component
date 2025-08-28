<?php

declare(strict_types=1);

namespace Superscript\FilamentAlertComponent\Schema\Components;

use BackedEnum;
use Filament\Support\Icons\Heroicon;
use Illuminate\Contracts\Support\Htmlable;

trait HasIcon
{
    use \Filament\Support\Concerns\HasIcon {
        getIcon as getBaseIcon;
    }

    public function getIcon(string | BackedEnum | null $default = null): string | BackedEnum | Htmlable | null
    {
        return $this->getBaseIcon() ?? match ($this->getStatus()) {
            'danger' => $default ?? Heroicon::OutlinedXCircle,
            'info' => $default ?? Heroicon::OutlinedInformationCircle,
            'success' => $default ?? Heroicon::OutlinedCheckCircle,
            'warning' => $default ?? Heroicon::OutlinedExclamationCircle,
            default => null,
        };
    }
}
