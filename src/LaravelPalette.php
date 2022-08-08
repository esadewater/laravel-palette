<?php

namespace ESadewater\LaravelPalette;

use MikeAlmond\Color\Color;

class LaravelPalette
{
    /**
     * @return Color
     */
    public static function randomColor(): Color
    {
        return Color::fromRgb(rand(0, 255), rand(0, 255), rand(0, 255));
    }
}
