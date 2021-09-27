# Changelog

All notable changes to `emoji` will be documented in this file

## 3.0.0 - 2021-09-27

- Update to use Emoji 14 (#53)

New major release as some of the emojis have been renamed

## 2.3.1 - 2021-07-04

- fix generate command to create `all()` static method (#51)

## 2.3.0 - 2021-05-09

- add Emoji::all() method (#50)

## 2.2.0 - 2020-12-04

- support PHP 8

## 2.1.4 - 2020-09-18

- update to Emoji 13.1 version

## 2.1.3 - 2020-09-16

- update generator template to use mb_* functions to match (#40)
- adjust generator emoji name parsing to filter out emoji version string (e.g. E1.0, E0.9, etc)
- update to Emoji 12.1 version

## 2.1.2 - 2020-02-07

- change uppercase function to mb_strtoupper instead of strtoupper (#40)

## 2.1.1 - 2018-03-22

- fix methods starting with numbers

## 2.1.0 - 2018-02-20

- add `countryFlag` method
- drop support for PHP 7.0 and 7.1

## 2.0.0 - 2018-10-17

- updated to use Full Emoji List v11.0

## 1.0.6 - 2018-07-04

- added 🦒

## 1.0.5 - 2016-09-27

- fixed flag emojis

## 1.0.4 - 2016-02-11

- fixed (yeah fixed so no breaking changes 😎) some weird characters in the flag names

## 1.0.3 - 2016-02-11

- add docblocks for autocompleting magic methods

## 1.0.2 - 2016-02-11

- fix character flag for st barthelemy

## 1.0.1 - 2016-02-07

- added all characters currently found at http://unicode.org/emoji/charts/full-emoji-list.html

## 1.0.0 - 2016-02-07

- initial release
