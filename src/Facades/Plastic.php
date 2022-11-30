<?php

namespace Sleimanx2\Plastic\Facades;

use Illuminate\Support\Facades\Facade;
use Sleimanx2\Plastic\PlasticManager;

class Plastic extends Facade
{
    /**
     * Get a plastic manager instance for the default connection.
     *
     * @return \Sleimanx2\Plastic\PlasticManager
     */
    protected static function getFacadeAccessor()
    {
        return PlasticManager::class;
    }
}
