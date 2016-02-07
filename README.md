# Display Emoji characters

[![Latest Version on Packagist](https://img.shields.io/packagist/v/spatie/emoji.svg?style=flat-square)](https://packagist.org/packages/spatie/emoji)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Build Status](https://img.shields.io/travis/spatie/emoji/master.svg?style=flat-square)](https://travis-ci.org/spatie/emoji)
[![SensioLabsInsight](https://img.shields.io/sensiolabs/i/61199a95-b5ac-4557-a05d-4a8893fc0913/.svg?style=flat-square)](https://insight.sensiolabs.com/projects/61199a95-b5ac-4557-a05d-4a8893fc0913/)
[![Quality Score](https://img.shields.io/scrutinizer/g/spatie/emoji.svg?style=flat-square)](https://scrutinizer-ci.com/g/spatie/emoji)
[![Total Downloads](https://img.shields.io/packagist/dt/spatie/emoji.svg?style=flat-square)](https://packagist.org/packages/spatie/emoji)

PHP 7 gained the ability to easily display emoji characters. 

```php
echo "\u{1F60D}"
```

This package makes that a tad easier en more readable:

```php
Emoji::grinningFace()
```

Spatie is a webdesign agency based in Antwerp, Belgium. You'll find an overview of all our open source projects [on our website](https://spatie.be/opensource).

## Install

You can install the package via composer:
``` bash
$ composer require spatie/emoji
```

## Usage

The `Spatie\Emoji\Emoji`-class contains character constants that may be used directly.

``` php
Emoji::CHARACTER_GRINNING_FACE;
```

Or your can use the shorter method:
``` php
Emoji::grinningFace();
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

I'm accepting PR's that add characters to the class. 
Please use [this list](http://unicode.org/emoji/charts/full-emoji-list.html) to look up the unicode value and
the name of the character

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email freek@spatie.be instead of using the issue tracker.

## Credits

- [Freek Van der Herten](https://github.com/freekmurze)
- [All Contributors](../../contributors)

## About Spatie
Spatie is a webdesign agency based in Antwerp, Belgium. You'll find an overview of all our open source projects [on our website](https://spatie.be/opensource).

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
