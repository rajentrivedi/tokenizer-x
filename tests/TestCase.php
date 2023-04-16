<?php

namespace Rajentrivedi\TokenizerX\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use Rajentrivedi\TokenizerX\TokenizerXServiceProvider;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app)
    {
        return [
            TokenizerXServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');
    }
}
