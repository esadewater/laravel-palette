<?php

namespace ESadewater\LaravelPalette;

use Illuminate\Support\Facades\Blade;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelPaletteServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-palette')
            ->hasViews();
    }

    public function bootingPackage()
    {
        parent::bootingPackage();

        Blade::directive('palette', function (string $expression) {
            [$name, $baseColor] = self::parseMultipleArgs($expression, 2);

            if ($baseColor === null) {
                $palette = "\ESadewater\LaravelPalette\Palettes\MonochromaticPalette::fromRandomColor()";
            } else {
                $palette = "\ESadewater\LaravelPalette\Palettes\MonochromaticPalette::fromColor($baseColor)";
            }

            return "<?php
                \$palette = $palette;
                echo (new \ESadewater\LaravelPalette\Formatters\CSSVariableFormatter())->format($name, \$palette);
            ?>";
        });
    }

    private static function parseMultipleArgs($expression, int $numArgs = 0): array
    {
        $args = explode(',', $expression);

        for ($i = 0; $i < $numArgs; $i++) {
            if (array_key_exists($i, $args)) {
                $args[$i] = trim($args[$i]);
            } else {
                $args[$i] = null;
            }
        }

        return array_slice($args, 0, $numArgs);
    }
}
