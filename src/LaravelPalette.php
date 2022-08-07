<?php

namespace Esadewater\LaravelPalette;

use MikeAlmond\Color\Color;
use MikeAlmond\Color\PaletteGenerator;

class LaravelPalette
{
    public function test()
    {
        $color     = Color::fromCssColor('RebeccaPurple');
        $generator = new PaletteGenerator($color);
        $palette   = $generator->triad(40);
    }
}
