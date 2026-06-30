<?php

use JeffersonGoncalves\FilamentCommerce\Umbrella\CommercePanelPlugin;

it('exposes the umbrella plugin id', function () {
    expect(CommercePanelPlugin::make()->getId())->toBe('filament-commerce');
});
