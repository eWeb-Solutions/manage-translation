<?php

declare(strict_types=1);

namespace ewebsolutions\ManageTranslation\Tests;

use ewebsolutions\ManageTranslation\ManageTranslationServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

abstract class TestCase extends Orchestra
{
    protected function getPackageProviders($app): array
    {
        return [
            ManageTranslationServiceProvider::class,
        ];
    }
}
