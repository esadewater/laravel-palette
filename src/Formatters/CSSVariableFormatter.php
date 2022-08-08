<?php

namespace ESadewater\LaravelPalette\Formatters;

use ESadewater\LaravelPalette\Palettes\Palette;
use Illuminate\View\View;

class CSSVariableFormatter extends BasePaletteFormatter
{
    /**
     * {@inheritDoc}
     */
    public function getTemplate(string $colorName, Palette $palette): View
    {
        return view('palette::css-variables-template', [
            'colorName' => $colorName,
            'colors' => $palette->getColors(),
        ]);
    }
}
