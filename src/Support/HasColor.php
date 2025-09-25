<?php

declare(strict_types=1);

namespace Superscript\FilamentAlertComponent\Support;

trait HasColor
{
    use \Filament\Support\Concerns\HasColor {
        getColor as getBaseColor;
    }

    public function getColor(): string | array | null
    {
        return $this->getBaseColor() ?? $this->getStatus();
    }
}
