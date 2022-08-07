<?php

namespace ESadewater\LaravelPalette\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \ESadewater\LaravelPalette\LaravelPalette
 */
class LaravelPalette extends Facade
{
    /**
     * @return class-string<\ESadewater\LaravelPalette\LaravelPalette>
     */
    protected static function getFacadeAccessor(): string
    {
        return \ESadewater\LaravelPalette\LaravelPalette::class;
    }
}
