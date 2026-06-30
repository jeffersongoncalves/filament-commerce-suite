<?php

namespace JeffersonGoncalves\FilamentCommerce\Umbrella\Tests;

use JeffersonGoncalves\FilamentCommerce\Umbrella\FilamentCommerceServiceProvider;
use Orchestra\Testbench\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    protected function getPackageProviders($app): array
    {
        return [
            FilamentCommerceServiceProvider::class,
        ];
    }
}
