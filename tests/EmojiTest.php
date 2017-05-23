<?php

namespace Spatie\Emoji\Test;

use Spatie\Emoji\Emoji;
use PHPUnit\Framework\TestCase;
use Spatie\Emoji\Exceptions\UnknownCharacter;

class EmojiTest extends TestCase
{
    /** @test */
    public function it_can_return_an_emoji_character_when_given_a_constant()
    {
        $this->assertSame('😀', Emoji::CHARACTER_GRINNING_FACE);
    }

    /** @test */
    public function it_provides_a_convenience_method_to_return_emoji_characters()
    {
        $this->assertSame('😀', Emoji::grinningFace());
    }

    /** @test */
    public function it_can_return_the_fitz_patrick_emoji()
    {
        $this->assertSame('🏻', Emoji::emojiModifierFitzpatrickType12());
    }

    /** @test */
    public function it_will_throw_an_exception_when_getting_unknown_characters()
    {
        $this->expectException(UnknownCharacter::class);

        Emoji::thisCharacterDoesNotExist();
    }
}
