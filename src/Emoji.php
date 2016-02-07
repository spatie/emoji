<?php

namespace Spatie\Emoji;

use Spatie\Emoji\Exceptions\UnknownCharacter;

class Emoji
{
    const CHARACTER_GRINNING_FACE = "\u{1F60D}";
    const CHARACTER_GRINNING_FACE_WITH_SMILING_EYES = "\u{1F601}";
    const CHARACTER_PILE_OF_POO = "\u{1F4A9}";
    const CHARACTER_CROSS_MARK = "\u{2705}";
    const CHARACTER_WHITE_HEAVY_CHECK_MARK = "\u{274C}";

    public static function getCharacter(string $characterName) : string
    {
        $constantName = static::convertCharacterNameToConstantName($characterName);

        if (!defined("static::{$constantName}")) {
            throw UnknownCharacter::create($characterName);
        }

        return constant('static::'.$constantName);
    }

    public static function __callStatic(string $methodName, array $paramters) : string
    {
        return static::getCharacter($methodName);
    }

    protected static function convertCharacterNameToConstantName(string $characterName) : string
    {
        $partialConstantName = static::convertToSnakeCase($characterName);

        $constantName = 'CHARACTER_'.strtoupper($partialConstantName);

        return $constantName;
    }

    protected static function convertToSnakeCase(string $value) : string
    {
        if (!ctype_lower($value)) {
            $value = preg_replace('/\s+/', '', $value);

            $value = strtolower(preg_replace('/(.)(?=[A-Z])/', '$1'.'_', $value));
        }

        return $value;
    }
}
