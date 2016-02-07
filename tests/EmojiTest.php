<?php

namespace Spatie\Emoji\Test;

use Spatie\Emoji\Emoji;
use Spatie\Emoji\Exceptions\UnknownCharacter;

class EmojiTest extends \PHPUnit_Framework_TestCase
{
    /** @test */
    public function it_can_return_an_emoji_character_when_given_a_constant()
    {
        $this->assertSame("\u{1F600}", Emoji::CHARACTER_GRINNING_FACE);
    }

    /** @test */
    public function it_provides_a_conveniece_method_to_return_emoji_characters()
    {
        $this->assertSame("\u{1F600}", Emoji::grinningFace());
    }

    /** @test */
    public function it_will_throw_an_exception_when_getting_unknown_characters()
    {
        $this->setExpectedException(UnknownCharacter::class);

        Emoji::thisCharacterDoesNotExist();
    }
}
