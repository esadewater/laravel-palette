<?php

namespace ESadewater\LaravelPalette\Formatters;

use ESadewater\LaravelPalette\Palettes\Palette;

interface PaletteFormatter
{
    /**
     * @param  string  $colorName
     * @param  Palette  $palette
     * @return mixed
     */
    public function format(string $colorName, Palette $palette): string;
}
