<?php

namespace Tojoo\Highlight\Tests;

use Tojoo\Highlight\Providers\HighlightServiceProvider;
use Orchestra\Testbench\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    protected function getPackageProviders($app): array
    {
        return [
            HighlightServiceProvider::class,
        ];
    }
}
