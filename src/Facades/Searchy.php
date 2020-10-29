<?php

namespace HighSolutions\LaravelSearchy\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Searchy facade for the Laravel framework.
 */
class Searchy extends Facade
{
    /**
     * Get the registered component.
     *
     * @return object
     */
    protected static function getFacadeAccessor()
    {
        return 'searchy';
    }
}
