<?php

namespace Spatie\Emoji\Exceptions;

use Exception;

class CouldNotDetermineFlag extends Exception
{
    public static function countryCodeLenghtIsWrong(string $invalidCountryCode): self
    {
        return new static("`{$invalidCountryCode}` is not a valid country code. A valid country code should have two characters.");
    }
}
