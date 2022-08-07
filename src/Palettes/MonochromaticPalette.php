<?php

namespace ESadewater\LaravelPalette\Palettes;

use Illuminate\Support\Collection;
use MikeAlmond\Color\Color;
use MikeAlmond\Color\PaletteGenerator;

class MonochromaticPalette implements Palette
{
    const DEFAULT_STEPS = 9;

    private Collection $colors;

    /**
     * @param  Color  $baseColor
     * @param  int  $steps
     */
    final private function __construct(Color $baseColor, int $steps)
    {
        $generator = new PaletteGenerator($baseColor);
        $colors = $generator->monochromatic($steps);

        $this->colors = collect($colors);
    }

    /**
     * @param  Color  $baseColor
     * @param  int  $steps
     * @return MonochromaticPalette
     */
    public static function fromColor(Color $baseColor, int $steps = self::DEFAULT_STEPS): MonochromaticPalette
    {
        return new MonochromaticPalette($baseColor, $steps);
    }

    /**
     * @param  int  $steps
     * @return MonochromaticPalette
     */
    public static function fromRandomColor(int $steps = self::DEFAULT_STEPS): MonochromaticPalette
    {
        $baseColor = Color::fromRgb(rand(0, 255), rand(0, 255), rand(0, 255));

        return new MonochromaticPalette($baseColor, $steps);
    }

    /**
     * {@inheritDoc}
     */
    public function getColors(): Collection
    {
        return $this->colors;
    }
}
