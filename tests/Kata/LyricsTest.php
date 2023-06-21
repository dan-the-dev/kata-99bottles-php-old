<?php

namespace Kata;

use PHPUnit\Framework\TestCase;

class LyricsTest extends TestCase
{
    public function testLyricGeneration(): void
    {
        $lyrics = new Lyrics();
        $actual = $lyrics->generate(new BottleNumber(3));
        $expectedLyric = [
            '3 bottles of beer on the wall, 3 bottles of beer. Take one down and pass it around, 2 bottles of beer on the wall.',
            '2 bottles of beer on the wall, 2 bottles of beer. Take one down and pass it around, 1 bottle of beer on the wall.',
            '1 bottle of beer on the wall, 1 bottle of beer. Take one down and pass it around, no more bottles of beer on the wall.',
            'No more bottles of beer on the wall, no more bottles of beer. Go to the store and buy some more, 99 bottles of beer on the wall.'
        ];
        $this->assertEquals($expectedLyric, $actual);

    }

}