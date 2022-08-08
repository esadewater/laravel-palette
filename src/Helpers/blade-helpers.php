<?php

use Illuminate\Support\Str;
use MikeAlmond\Color\Color;

if (!function_exists('a11y')) {
    /**
     * Get complimentary text color
     */
    function a11y(Color $color): Color
    {
        return $color->getMatchingTextColor();
    }
}

if (!function_exists('color')) {
    /**
     * Format color:
     * - rgb: 'r, g, b'
     * - hex: '#....'
     */
    function color(Color $color, string $format = 'rgb'): string
    {
        return match (Str::lower($format)) {
            'hex' => '#' . $color->getHex(),
            default => $color->getRgb()['r'] . ", " . $color->getRgb()['g'] . ", " . $color->getRgb()['b']
        };
    }
}