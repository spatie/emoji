<?php

uses(PHPUnit\Framework\TestCase::class)->in('.');

// Functions

function emojiDataset(): array
{
    return json_decode(file_get_contents(__DIR__ . '/emojis.json'), true);
}

function unicodeHexToEmoji(string $code)
{
    return mb_convert_encoding(hex2bin(implode('', array_map(function ($hex) {
        return str_pad($hex, 8, '0', STR_PAD_LEFT);
    }, explode(' ', trim(str_replace('}\u{', ' ', $code), '}\u{'))))), 'UTF-8', 'UTF-32');
}
