<?php

use Filament\Facades\Filament;
use JeffersonGoncalves\FilamentCommerce\Umbrella\Widgets\CommerceStatsWidget;

it('registers the commerce stats widget on the panel', function () {
    expect(Filament::getCurrentPanel()->getWidgets())->toContain(CommerceStatsWidget::class);
});
