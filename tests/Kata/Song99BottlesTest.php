<?php

namespace Kata;

use PHPUnit\Framework\TestCase;

class Song99BottlesTest extends TestCase
{
    private Song99Bottles $song99Bottles;

    protected function setUp(): void
    {
        $this->song99Bottles = new Song99Bottles();
    }

    public function test99BottlesVerseFirstLine(): void
    {
        $this->assertEquals(
            '99 bottles of beer on the wall, 99 bottles of beer.',
            $this->song99Bottles->getVerseFirstLine(99)
        );
    }

    public function test98BottlesVerseFirstLine(): void
    {
        $this->assertEquals(
            '98 bottles of beer on the wall, 98 bottles of beer.',
            $this->song99Bottles->getVerseFirstLine(98)
        );
    }

    public function test97BottlesVerseFirstLine(): void
    {
        $this->assertEquals(
            '97 bottles of beer on the wall, 97 bottles of beer.',
            $this->song99Bottles->getVerseFirstLine(97)
        );
    }

    public function test99BottlesVerseSecondLine(): void
    {
        $this->assertEquals(
            'Take one down and pass it around, 98 bottles of beer on the wall.',
            $this->song99Bottles->getVerseSecondLine()
        );
    }

    public function test99BottlesVerseComplete(): void
    {
        $this->assertEquals(
            [
                '99 bottles of beer on the wall, 99 bottles of beer.',
                'Take one down and pass it around, 98 bottles of beer on the wall.',
            ],
            $this->song99Bottles->getVerse()
        );
    }
}
