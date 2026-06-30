<?php

namespace JeffersonGoncalves\FilamentCommerce\Umbrella;

use Filament\Contracts\Plugin;
use Filament\Panel;
use JeffersonGoncalves\FilamentCommerce\ApiKey\CommerceApiKeyPlugin;
use JeffersonGoncalves\FilamentCommerce\Auth\CommerceAuthPlugin;
use JeffersonGoncalves\FilamentCommerce\Cart\CommerceCartPlugin;
use JeffersonGoncalves\FilamentCommerce\Currency\CommerceCurrencyPlugin;
use JeffersonGoncalves\FilamentCommerce\Customer\CommerceCustomerPlugin;
use JeffersonGoncalves\FilamentCommerce\Fulfillment\CommerceFulfillmentPlugin;
use JeffersonGoncalves\FilamentCommerce\Inventory\CommerceInventoryPlugin;
use JeffersonGoncalves\FilamentCommerce\Loyalty\CommerceLoyaltyPlugin;
use JeffersonGoncalves\FilamentCommerce\Order\CommerceOrderPlugin;
use JeffersonGoncalves\FilamentCommerce\Payment\CommercePaymentPlugin;
use JeffersonGoncalves\FilamentCommerce\Pricing\CommercePricingPlugin;
use JeffersonGoncalves\FilamentCommerce\Product\CommerceProductPlugin;
use JeffersonGoncalves\FilamentCommerce\Promotion\CommercePromotionPlugin;
use JeffersonGoncalves\FilamentCommerce\Region\CommerceRegionPlugin;
use JeffersonGoncalves\FilamentCommerce\SalesChannel\CommerceSalesChannelPlugin;
use JeffersonGoncalves\FilamentCommerce\StockLocation\CommerceStockLocationPlugin;
use JeffersonGoncalves\FilamentCommerce\Store\CommerceStorePlugin;
use JeffersonGoncalves\FilamentCommerce\StoreCredit\CommerceStoreCreditPlugin;
use JeffersonGoncalves\FilamentCommerce\Tax\CommerceTaxPlugin;
use JeffersonGoncalves\FilamentCommerce\Translation\CommerceTranslationPlugin;
use JeffersonGoncalves\FilamentCommerce\User\CommerceUserPlugin;

/**
 * Umbrella plugin that registers every Commerce module plugin onto a panel in
 * one call: `->plugin(CommercePanelPlugin::make())`.
 */
class CommercePanelPlugin implements Plugin
{
    public function getId(): string
    {
        return 'filament-commerce';
    }

    public function register(Panel $panel): void
    {
        $panel->plugins([
            CommerceCurrencyPlugin::make(),
            CommerceStorePlugin::make(),
            CommerceSalesChannelPlugin::make(),
            CommerceRegionPlugin::make(),
            CommerceStockLocationPlugin::make(),
            CommerceApiKeyPlugin::make(),
            CommerceUserPlugin::make(),
            CommerceAuthPlugin::make(),
            CommerceProductPlugin::make(),
            CommercePricingPlugin::make(),
            CommerceInventoryPlugin::make(),
            CommerceCustomerPlugin::make(),
            CommerceCartPlugin::make(),
            CommerceOrderPlugin::make(),
            CommercePaymentPlugin::make(),
            CommerceFulfillmentPlugin::make(),
            CommerceTaxPlugin::make(),
            CommercePromotionPlugin::make(),
            CommerceLoyaltyPlugin::make(),
            CommerceStoreCreditPlugin::make(),
            CommerceTranslationPlugin::make(),
        ]);
    }

    public function boot(Panel $panel): void
    {
        //
    }

    public static function make(): static
    {
        return app(static::class);
    }
}
