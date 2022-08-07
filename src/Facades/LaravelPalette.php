<?php

namespace Esadewater\LaravelPalette\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Esadewater\LaravelPalette\LaravelPalette
 */
class LaravelPalette extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Esadewater\LaravelPalette\LaravelPalette::class;
    }
}
