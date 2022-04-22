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

    public function test2BottlesVerseFirstLine(): void
    {
        $this->assertEquals(
            '2 bottles of beer on the wall, 2 bottles of beer.',
            $this->song99Bottles->getVerseFirstLine(2)
        );
    }

    public function test1BottleVerseFirstLine(): void
    {
        $this->assertEquals(
            '1 bottle of beer on the wall, 1 bottle of beer.',
            $this->song99Bottles->getVerseFirstLine(1)
        );
    }

    public function testZeroBottlesVerseFirstLine(): void
    {
        $this->assertEquals(
            'No more bottles of beer on the wall, no more bottles of beer.',
            $this->song99Bottles->getVerseFirstLine(0)
        );
    }

    public function test99BottlesVerseSecondLine(): void
    {
        $this->assertEquals(
            'Take one down and pass it around, 98 bottles of beer on the wall.',
            $this->song99Bottles->getVerseSecondLine(99)
        );
    }

    public function test98BottlesVerseSecondLine(): void
    {
        $this->assertEquals(
            'Take one down and pass it around, 97 bottles of beer on the wall.',
            $this->song99Bottles->getVerseSecondLine(98)
        );
    }

    public function test97BottlesVerseSecondLine(): void
    {
        $this->assertEquals(
            'Take one down and pass it around, 96 bottles of beer on the wall.',
            $this->song99Bottles->getVerseSecondLine(97)
        );
    }

    public function test3BottlesVerseSecondLine(): void
    {
        $this->assertEquals(
            'Take one down and pass it around, 2 bottles of beer on the wall.',
            $this->song99Bottles->getVerseSecondLine(3)
        );
    }

    public function test2BottlesVerseSecondLine(): void
    {
        $this->assertEquals(
            'Take one down and pass it around, 1 bottle of beer on the wall.',
            $this->song99Bottles->getVerseSecondLine(2)
        );
    }

    public function test1BottleVerseSecondLine(): void
    {
        $this->assertEquals(
            'Take one down and pass it around, no more bottles of beer on the wall.',
            $this->song99Bottles->getVerseSecondLine(1)
        );
    }

    public function testZeroBottlesVerseSecondLine(): void
    {
        $this->assertEquals(
            'Go to the store and buy some more, 99 bottles of beer on the wall.',
            $this->song99Bottles->getVerseSecondLine(0)
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
