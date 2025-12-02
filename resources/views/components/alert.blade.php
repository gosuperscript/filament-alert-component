@php
    use Filament\Support\Enums\IconSize;
    use Superscript\FilamentAlertComponent\View\Components\AlertComponent;
    use function Filament\Support\generate_icon_html;

    $color = $getColor();
    $icon = $getIcon();
    $heading = $getHeading();
    $description = $getDescription();

    $actions = $getActions();
@endphp

<div {{ $attributes->class([
    'fi-super-alert'
])->color(AlertComponent::class, $color) }}>
    @if ($icon)
        <div>
            {{ generate_icon_html($icon, size: IconSize::Medium) }}
        </div>
    @endif

    <div class="fi-super-alert-text">
        <h3 class="fi-super-alert-heading">
            {{ $heading }}
        </h3>

        @if($description)
            <p>
                {{ $description }}
            </p>
        @endif
    </div>
</div>
