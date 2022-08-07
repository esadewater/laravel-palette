<?php

namespace ESadewater\LaravelPalette\Palettes;

use Illuminate\Support\Collection;
use MikeAlmond\Color\Color;

interface Palette
{
    /**
     * @return Collection<Color>
     */
    public function getColors(): Collection;
}