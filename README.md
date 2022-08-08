# Laravel Dynamic Colors

This package dynamically generates color palettes with different shades for usage with e.g. Tailwind-CSS.

## Installation

You can install the package via composer:

```bash
composer require esadewater/laravel-palette
```

[//]: # (You can publish the config file with:)

[//]: # ()
[//]: # (```bash)

[//]: # (php artisan vendor:publish --tag="laravel-palette-config")

[//]: # (```)

## Usage

In Blade-Layout add new Palette with name and random colors:

```php
@palette('primary')
```

This will generate the following style:

```html
<style>
    :root {
        --color-primary-100: 244, 250, 246;
        --color-primary-200: 219, 242, 228;
        --color-primary-300: 195, 235, 209;
        --color-primary-400: 171, 224, 191;
        --color-primary-500: 147, 217, 172;
        --color-primary-600: 123, 207, 154;
        --color-primary-700: 98, 199, 135;
        --color-primary-800: 74, 189, 116;
        --color-primary-900: 61, 168, 101;
    }
</style>
```

You can use this colors with e.g. Tailwind-CSS:

```javascript
theme: {
    extend: {
        colors: {
            primary: {
                100: "--color-primary-100",
                200: "--color-primary-200",
                300: "--color-primary-300",
                400: "--color-primary-400",
                500: "--color-primary-500",
                600: "--color-primary-600",
                700: "--color-primary-700",
                800: "--color-primary-800",
                900: "--color-primary-900"
            }
        }
    }
}
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](https://github.com/esadewater/.github/blob/main/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Erik Sadewater](https://github.com/esadewater)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
