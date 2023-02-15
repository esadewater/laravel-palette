<?php

namespace ESadewater\LaravelPalette\Formatters;

use ESadewater\LaravelPalette\Palettes\Palette;

interface PaletteFormatter
{
    /**
     * @return mixed
     */
    public function format(string $colorName, Palette $palette): string;
}
