<?php

namespace ESadewater\LaravelPalette\Formatters;

use ESadewater\LaravelPalette\Palettes\Palette;
use Illuminate\View\View;
use Throwable;

abstract class BasePaletteFormatter implements PaletteFormatter
{
    /**
     * @param  string  $colorName
     * @param  Palette  $palette
     * @return View
     */
    abstract public function getTemplate(string $colorName, Palette $palette): View;

    /**
     * {@inheritDoc}
     *
     * @throws FormatException
     */
    public function format(string $colorName, Palette $palette): string
    {
        try {
            return $this->getTemplate($colorName, $palette)->render();
        } catch (Throwable $e) {
            report($e);
            throw new FormatException($e->getMessage());
        }
    }
}
