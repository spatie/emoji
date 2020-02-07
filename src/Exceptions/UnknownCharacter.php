<?php

namespace Spatie\Emoji\Exceptions;

use Exception;

class UnknownCharacter extends Exception
{
    public static function create($character): self
    {
        return new static("Character `{$character}` does not exist");
    }
}
