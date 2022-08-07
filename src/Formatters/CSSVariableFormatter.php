<?php

namespace ESadewater\LaravelPalette\Formatters;

use ESadewater\LaravelPalette\Palettes\Palette;
use Illuminate\View\View;

class CSSVariableFormatter extends BasePaletteFormatter
{

    /**
     * @inheritDoc
     */
    function getTemplate(string $colorName, Palette $palette): View
    {
        return view('css-variables-template', [
            'colorName' => $colorName,
            'colors' => $palette->getColors()
        ]);
    }
}