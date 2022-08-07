<?php

namespace ESadewater\LaravelPalette\Formatters;

use ESadewater\LaravelPalette\Palettes\Palette;

interface PaletteFormatter
{
    /**
     * @param string $colorColorName
     * @param Palette $palette
     * @return mixed
     */
    public function format(string $colorColorName, Palette $palette): string;
}