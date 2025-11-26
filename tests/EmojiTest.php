<?php

use Spatie\Emoji\Emoji;
use Spatie\Emoji\Exceptions\CouldNotDetermineFlag;
use Spatie\Emoji\Exceptions\UnknownCharacter;

it('can return an emoji character when given a constant')
    ->expect(Emoji::CHARACTER_GRINNING_FACE)->toEqual('😀')
    ->and(Emoji::CHARACTER_SMILING_FACE_WITH_HEARTS)->toEqual('🥰')
    ->and(Emoji::CHARACTER_KEYCAP_10)->toEqual('🔟');

it('provides a convenience method to return emoji characters', function ($emoji, $emojiMethod) {
    expect($emojiMethod)->toEqual($emoji);
})
    ->with([
        ['😀', Emoji::grinningFace()],
        ['🥰', Emoji::smilingFaceWithHearts()],
        ['🔟', Emoji::keycap10()],
        ['🥇', Emoji::firstPlaceMedal()],
        ['🥈', Emoji::secondPlaceMedal()],
        ['🥉', Emoji::thirdPlaceMedal()],
    ]);

it('can return the skin tone component emoji', function () {
    expect(Emoji::lightSkinTone())->toEqual('🏻');
});

it('it will throw an exception when getting unknown characters', function () {
    Emoji::thisCharacterDoesNotExist();
})->throws(UnknownCharacter::class);

it('will return an emoji character when given a language code', function ($emoji, $emojiMethod) {
    expect($emoji)->toEqual($emojiMethod);
})
    ->with([
        ['🇧🇪', Emoji::countryFlag('BE')],
        ['🇧🇪', Emoji::countryFlag('be')],
        ['🇦🇦', Emoji::countryFlag('AA')],
    ]);

it('can return an array of all emoji characters')
    ->expect(Emoji::all())->toBeArray()
    ->toHaveCount(count(emojiDataset()));
;

test('all emojis list will contain every emoji defined as const', function ($emoji) {
    expect(Emoji::all()[$emoji['const']])->toEqual(unicodeHexToEmoji($emoji['code']));
})->with(emojiDataset());

it("will throw an exception when try to get a flag for a string that doesn't have two characters", function ($invalidCountryCode) {
    Emoji::countryFlag($invalidCountryCode);
})->with([
    [''],
    ['a'],
    ['aaa'],
])
    ->throws(CouldNotDetermineFlag::class);

it('can access emoji by constant', function ($emoji) {
    expect(Emoji::{$emoji['method']}())->toEqual(unicodeHexToEmoji($emoji['code']));
})->with(emojiDataset());

it('can access emoji by method', function ($emoji) {
    expect(constant(Emoji::class . '::' . $emoji['const']))->toEqual(unicodeHexToEmoji($emoji['code']));
})->with(emojiDataset());
