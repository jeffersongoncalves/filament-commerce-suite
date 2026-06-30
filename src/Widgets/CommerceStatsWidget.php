<?php

namespace JeffersonGoncalves\FilamentCommerce\Umbrella\Widgets;

use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use JeffersonGoncalves\Commerce\Customer\Models\Customer;
use JeffersonGoncalves\Commerce\Order\Models\Order;
use JeffersonGoncalves\Commerce\Product\Models\Product;

class CommerceStatsWidget extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Products', (string) Product::query()->count()),
            Stat::make('Orders', (string) Order::query()->count()),
            Stat::make('Customers', (string) Customer::query()->count()),
        ];
    }
}
