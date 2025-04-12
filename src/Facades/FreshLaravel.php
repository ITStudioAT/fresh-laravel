<?php

namespace Itstudioat\FreshLaravel\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Itstudioat\FreshLaravel\FreshLaravel
 */
class FreshLaravel extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Itstudioat\FreshLaravel\FreshLaravel::class;
    }
}
