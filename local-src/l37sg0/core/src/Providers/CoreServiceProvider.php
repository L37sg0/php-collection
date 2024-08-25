<?php

namespace L37sg0\Core\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class CoreServiceProvider extends ServiceProvider
{
    /**
     * Recursively merge the given configuration file with the existing configuration.
     *
     * @param string $configKey
     * @param string $path
     * @return void
     */
    protected function mergeConfigRecursively($configKey, $path)
    {
        $config = $this->app['config']->get($configKey, []);
        $packageConfig = require $path;

        $mergedConfig = $this->arrayMergeRecursiveDistinct($packageConfig, $config);

        $this->app['config']->set($configKey, $mergedConfig);
    }

    /**
     * Recursively merge two arrays, favoring distinct values.
     *
     * @param array $array1
     * @param array $array2
     * @return array
     */
    private function arrayMergeRecursiveDistinct(array &$array1, array &$array2)
    {
        $merged = $array1;

        foreach ($array2 as $key => &$value) {
            if (is_array($value) && isset($merged[$key]) && is_array($merged[$key])) {
                $merged[$key] = $this->arrayMergeRecursiveDistinct($merged[$key], $value);
            } else {
                $merged[$key] = $value;
            }
        }

        return $merged;
    }

    protected function loadRoutesWithMiddleware(string $middleware, string $path)
    {
        Route::middleware($middleware)
            ->group(function () use($path) {
                $this->loadRoutesFrom($path);
            });
    }
}
