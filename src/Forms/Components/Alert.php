<?php

declare(strict_types=1);

namespace Superscript\FilamentAlertComponent\Forms\Components;

use Closure;
use Filament\Forms\Components\Component;
use Filament\Support\Concerns\HasDescription;
use Filament\Support\Concerns\HasHeading;
use Illuminate\Contracts\Support\Htmlable;
use Superscript\FilamentAlertComponent\Support\HasColor;
use Superscript\FilamentAlertComponent\Support\HasIcon;
use Superscript\FilamentAlertComponent\Support\HasStatus;

final class Alert extends Component
{
    use HasColor;
    use HasDescription;
    use HasHeading;
    use HasIcon;
    use HasStatus;

    /**
     * @var view-string
     */
    protected string $view = 'filament-alert-component::components.alert';

    final public function __construct(string | Htmlable | Closure $heading)
    {
        $this->heading($heading);
    }

    public static function make(string | Htmlable | Closure $heading): self
    {
        $static = app(self::class, ['heading' => $heading]);
        $static->configure();

        return $static;
    }
}
