<<<<<<< HEAD
# Display Emoji characters

[![Latest Version on Packagist](https://img.shields.io/packagist/v/spatie/emoji.svg?style=flat-square)](https://packagist.org/packages/spatie/emoji)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Build Status](https://img.shields.io/travis/spatie/emoji/master.svg?style=flat-square)](https://travis-ci.org/spatie/emoji)
[![SensioLabsInsight](https://img.shields.io/sensiolabs/i/xxxxxxxxx.svg?style=flat-square)](https://insight.sensiolabs.com/projects/xxxxxxxxx)
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
=======
# :package_name

[![Latest Version on Packagist](https://img.shields.io/packagist/v/spatie/:package_name.svg?style=flat-square)](https://packagist.org/packages/spatie/:package_name)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Build Status](https://img.shields.io/travis/spatie/:package_name/master.svg?style=flat-square)](https://travis-ci.org/spatie/:package_name)
[![SensioLabsInsight](https://img.shields.io/sensiolabs/i/xxxxxxxxx.svg?style=flat-square)](https://insight.sensiolabs.com/projects/xxxxxxxxx)
[![Quality Score](https://img.shields.io/scrutinizer/g/spatie/:package_name.svg?style=flat-square)](https://scrutinizer-ci.com/g/spatie/:package_name)
[![Total Downloads](https://img.shields.io/packagist/dt/spatie/:package_name.svg?style=flat-square)](https://packagist.org/packages/spatie/:package_name)

**Note:** Replace ```:author_name``` ```:author_username``` ```:author_website``` ```:author_email``` ```:package_name``` ```:package_description``` with their correct values in [README.md](README.md), [CHANGELOG.md](CHANGELOG.md), [CONTRIBUTING.md](CONTRIBUTING.md), [LICENSE.md](LICENSE.md) and [composer.json](composer.json) files, then delete this line.

This is where your description should go. Try and limit it to a paragraph or two, and maybe throw in a mention of what
PSRs you support to avoid any confusion with users and contributors.
>>>>>>> 861c1823dc15e663fc9bfe1e5ac3295119bede69

Spatie is a webdesign agency based in Antwerp, Belgium. You'll find an overview of all our open source projects [on our website](https://spatie.be/opensource).

## Install

<<<<<<< HEAD
You can install the package via composer:
``` bash
$ composer require spatie/emoji
=======
**Note:** Remove this paragraph if you are building a public package
This package is custom built for [Spatie](https://spatie.be) projects and is therefore not registered on packagist. 
In order to install it via composer you must specify this extra repository in `composer.json`:

```json
"repositories": [ { "type": "composer", "url": "https://satis.spatie.be/" } ]
```

You can install the package via composer:
``` bash
$ composer require spatie/:package_name
>>>>>>> 861c1823dc15e663fc9bfe1e5ac3295119bede69
```

## Usage

<<<<<<< HEAD

The `Spatie\Emoji\Emoji`-class contains character constants that may be used directly.

``` php
Emoji::CHARACTER_GRINNING_FACE;
```

Or your can use the shorter method:
``` php
Emoji::grinningFace();
=======
``` php
$skeleton = new Spatie\Skeleton();
echo $skeleton->echoPhrase('Hello, Spatie!');
>>>>>>> 861c1823dc15e663fc9bfe1e5ac3295119bede69
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

<<<<<<< HEAD
I'm accepting PR's that add characters to the class. 
Please use [this list](http://unicode.org/emoji/charts/full-emoji-list.html) to look up the unicode value and
the name of the character

=======
>>>>>>> 861c1823dc15e663fc9bfe1e5ac3295119bede69
Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email freek@spatie.be instead of using the issue tracker.

## Credits

<<<<<<< HEAD
- [Freek Van der Herten](https://github.com/freekmurze)
=======
- [:author_name](https://github.com/:author_username)
>>>>>>> 861c1823dc15e663fc9bfe1e5ac3295119bede69
- [All Contributors](../../contributors)

## About Spatie
Spatie is a webdesign agency based in Antwerp, Belgium. You'll find an overview of all our open source projects [on our website](https://spatie.be/opensource).

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
