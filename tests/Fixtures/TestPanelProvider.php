<?php

namespace JeffersonGoncalves\FilamentCommerce\Umbrella\Tests\Fixtures;

use Filament\Panel;
use Filament\PanelProvider;
use JeffersonGoncalves\FilamentCommerce\Umbrella\CommercePanelPlugin;

class TestPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->login()
            ->plugins([
                CommercePanelPlugin::make(),
            ]);
    }
}
