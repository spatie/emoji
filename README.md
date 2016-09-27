# Programatically work with emoji characters in PHP 7

[![Latest Version on Packagist](https://img.shields.io/packagist/v/spatie/emoji.svg?style=flat-square)](https://packagist.org/packages/spatie/emoji)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Build Status](https://img.shields.io/travis/spatie/emoji/master.svg?style=flat-square)](https://travis-ci.org/spatie/emoji)
[![Quality Score](https://img.shields.io/scrutinizer/g/spatie/emoji.svg?style=flat-square)](https://scrutinizer-ci.com/g/spatie/emoji)
[![StyleCI](https://styleci.io/repos/51245349/shield?branch=master)](https://styleci.io/repos/51245349)
[![Total Downloads](https://img.shields.io/packagist/dt/spatie/emoji.svg?style=flat-square)](https://packagist.org/packages/spatie/emoji)

In PHP you can display emoji characters just by typing them:

```php
echo "😃";
```

This package provides some functionality to work with emoji's if your IDE or used font can't render them correctly:

```php
Emoji::grinningFace();
```

Spatie is a webdesign agency based in Antwerp, Belgium. You'll find an overview of all our open source projects [on our website](https://spatie.be/opensource).

## Postcardware

You're free to use this package (it's [MIT-licensed](LICENSE.md)), but if it makes it to your production environment you are required to send us a postcard from your hometown, mentioning which of our package(s) you are using.

Our address is: Spatie, Samberstraat 69D, 2060 Antwerp, Belgium.

The best postcards will get published on the open source page on our website.

## Install

You can install the package via composer:
``` bash
$ composer require spatie/emoji
```

## Usage

The `Spatie\Emoji\Emoji`-class contains character constants that may be used directly:

```php
Emoji::CHARACTER_GRINNING_FACE;
```

Or your can use the shorter method by leaving off "character" and using camelCase:
```php
Emoji::grinningFace();
```

This package contains all characters listed on http://unicode.org/emoji/charts/full-emoji-list.html
(retrieval date: 2016-02-07)

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

We are accepting PR's that add characters to the class. 
Please use [this list](http://unicode.org/emoji/charts/full-emoji-list.html) to look up the unicode value and
the name of the character.

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
