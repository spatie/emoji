# Programatically work with emoji characters

[![Latest Version on Packagist](https://img.shields.io/packagist/v/spatie/emoji.svg?style=flat-square)](https://packagist.org/packages/spatie/emoji)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
![Tests](https://github.com/spatie/emoji/workflows/Tests/badge.svg)
[![Total Downloads](https://img.shields.io/packagist/dt/spatie/emoji.svg?style=flat-square)](https://packagist.org/packages/spatie/emoji)

In PHP, you can display emoji characters just by typing them:

```php
echo "😃";
```

This package provides some functionality to work with emojis if your IDE or used font can't render them correctly:

```php
Emoji::grinningFace();
```

Spatie is a webdesign agency based in Antwerp, Belgium. You'll find an overview of all our open source projects [on our website](https://spatie.be/opensource).

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/emoji.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/emoji)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Postcardware

You're free to use this package (it's [MIT-licensed](LICENSE.md)), but if it makes it to your production environment you are required to send us a postcard from your hometown, mentioning which of our package(s) you are using.

Our address is: Spatie, Kruikstraat 22, 2018 Antwerp, Belgium.

The best postcards will get published on the open source page on our website.

## Install

You can install the package via composer:
``` bash
composer require spatie/emoji
```

## Usage

The `Spatie\Emoji\Emoji`-class contains character constants that may be used directly:

```php
Emoji::CHARACTER_GRINNING_FACE;
```

Or you can use the shorter method by leaving off "character" and using camelCase:
```php
Emoji::grinningFace();
```

If you want to get an array containing all emojis, you can use this method:
```php
Emoji::all();
 ```

You can also use an [ISO 3166 Alpha2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country code and get the appropriate flag for the country:
```php
Emoji::countryFlag('be'); // 🇧🇪
```

This package contains Full Emoji List v13.1 based on https://unicode.org/Public/emoji/13.1/emoji-test.txt all methods and constants are auto-generated.

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

We are accepting PRs that add characters to the class.
Please use [this list](http://unicode.org/emoji/charts/full-emoji-list.html) to look up the unicode value and
the name of the character.

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email freek@spatie.be instead of using the issue tracker.

## Credits

- [Freek Van der Herten](https://github.com/freekmurze)
- [BoGnY](https://github.com/bogny)
- [All Contributors](../../contributors)

## About Spatie
Spatie is a webdesign agency based in Antwerp, Belgium. You'll find an overview of all our open source projects [on our website](https://spatie.be/opensource).

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
