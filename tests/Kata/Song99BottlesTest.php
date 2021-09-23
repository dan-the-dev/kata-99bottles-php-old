<?php

namespace Kata;

use PHPUnit\Framework\TestCase;

class Song99BottlesTest extends TestCase
{
    /**
     * @var Song99Bottles $song99Bottles
     */
    private $song99Bottles;

    protected function setUp(): void
    {
        $this->song99Bottles = new Song99Bottles();
    }

    public function test99BottlesVerse(): void
    {
        $expected = new SongVerse("99 bottles of beer on the wall, 99 bottles of beer.", "Take one down and pass it around, 98 bottles of beer on the wall.");
        $actual = $this->song99Bottles->verse(99);

        $this->assertEquals($expected, $actual);
    }

    public function test98BottlesVerse(): void
    {
        $expected = new SongVerse("98 bottles of beer on the wall, 98 bottles of beer.", "Take one down and pass it around, 97 bottles of beer on the wall.");
        $actual = $this->song99Bottles->verse(98);

        $this->assertEquals($expected, $actual);
    }

    public function test4BottlesVerse(): void
    {
        $expected = new SongVerse("4 bottles of beer on the wall, 4 bottles of beer.", "Take one down and pass it around, 3 bottles of beer on the wall.");
        $actual = $this->song99Bottles->verse(4);

        $this->assertEquals($expected, $actual);
    }

    public function test3BottlesVerse(): void
    {
        $expected = new SongVerse("3 bottles of beer on the wall, 3 bottles of beer.", "Take one down and pass it around, 2 bottles of beer on the wall.");
        $actual = $this->song99Bottles->verse(3);

        $this->assertEquals($expected, $actual);
    }

    public function test2BottlesVerse(): void
    {
        $expected = new SongVerse("2 bottles of beer on the wall, 2 bottles of beer.", "Take one down and pass it around, 1 bottle of beer on the wall.");
        $actual = $this->song99Bottles->verse(2);

        $this->assertEquals($expected, $actual);
    }

    public function test1BottleVerse(): void
    {
        $expected = new SongVerse("1 bottle of beer on the wall, 1 bottle of beer.", "Take one down and pass it around, no more bottles of beer on the wall.");
        $actual = $this->song99Bottles->verse(1);

        $this->assertEquals($expected, $actual);
    }

    public function test0BottlesVerse(): void
    {
        $expected = new SongVerse("No more bottles of beer on the wall, no more bottles of beer.", "Go to the store and buy some more, 99 bottles of beer on the wall.");
        $actual = $this->song99Bottles->verse(0);

        $this->assertEquals($expected, $actual);
    }
}
