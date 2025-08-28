<?php

declare(strict_types=1);

namespace Superscript\FilamentAlertComponent\Schema\Components;

use Closure;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Components\Concerns\HasDescription;
use Filament\Schemas\Components\Concerns\HasHeading;
use Illuminate\Contracts\Support\Htmlable;

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
