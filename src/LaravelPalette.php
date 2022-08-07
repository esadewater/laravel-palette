<?php

namespace ESadewater\LaravelPalette;

use MikeAlmond\Color\Color;
use MikeAlmond\Color\PaletteGenerator;

class LaravelPalette
{
    /**
     * @return Color
     */
    public function randomColor(): Color
    {
        return Color::fromRgb(rand(0, 255), rand(0, 255), rand(0,255));
    }

    /**
     * @param Color $color
     * @param int $steps
     * @return array
     */
    public function palette(Color $color, int $steps = 9): array
    {
        return (new PaletteGenerator($color))->monochromatic($steps);
    }
}
