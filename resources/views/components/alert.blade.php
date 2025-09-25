@php
    use Filament\Support\Enums\IconSize;
    use Filament\Support\View\Components\BadgeComponent;
    use function Filament\Support\generate_icon_html;

    $color = $getColor();
    $icon = $getIcon();
    $iconSize = $getIconSize();
    $heading = $getHeading();
    $description = $getDescription();

    $actions = $getActions();

    if (! $iconSize instanceof IconSize) {
        $iconSize = filled($iconSize) ? (IconSize::tryFrom($iconSize) ?? $iconSize) : null;
    }

    $iconClasses = \Illuminate\Support\Arr::toCssClasses([
        'h-5 w-5',
        match ($color) {
            'gray' => 'text-gray-400 dark:text-gray-500',
            default => 'text-custom-500',
        },
    ]);

    $iconStyles = \Illuminate\Support\Arr::toCssStyles([
        \Filament\Support\get_color_css_variables(
            $color,
            shades: [500],
            alias: 'badge.icon',
        ) => $color !== 'gray',
    ]);
@endphp

<div {{ $attributes->class([
    'fi-super-alert',
    'flex rounded-lg p-4 text-sm gap-3',
    match ($color) {
        'gray' => 'bg-gray-50 text-gray-600 dark:bg-gray-400/10 dark:text-gray-400',
        default => 'fi-color-custom bg-custom-50 text-custom-600 dark:bg-custom-400/10 dark:text-custom-400',
    },
    is_string($color) ? "fi-color-{$color}" : null,
])->style([
    \Filament\Support\get_color_css_variables(
        $color,
        shades: [
            50,
            400,
            600,
        ],
        alias: 'badge',
    ) => $color !== 'gray',
]) }}>
    @if ($icon)
        <x-filament::icon
            :attributes="
                \Filament\Support\prepare_inherited_attributes(
                    new \Illuminate\View\ComponentAttributeBag([
                        'icon' => $icon,
                    ])
                )
                    ->class([$iconClasses])
                    ->style([$iconStyles])
            "
        />
    @endif

    <div class="fi-super-alert-text grid gap-1">
        <h3 class="fi-super-alert-heading font-medium">
            {{ $heading }}
        </h3>

        @if($description)
            <p>
                {{ $description }}
            </p>
        @endif
    </div>
</div>
