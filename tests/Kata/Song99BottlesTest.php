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
        $expected = ["99 bottles of beer on the wall, 99 bottles of beer.", "Take one down and pass it around, 98 bottles of beer on the wall."];
        $actual = $this->song99Bottles->verse(99);

        $this->assertSame($expected, $actual);
    }

    public function test98BottlesVerse(): void
    {
        $expected = ["98 bottles of beer on the wall, 98 bottles of beer.", "Take one down and pass it around, 97 bottles of beer on the wall."];
        $actual = $this->song99Bottles->verse(99);

        $this->assertSame($expected, $actual);
    }
}
