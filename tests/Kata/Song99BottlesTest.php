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

    public function testVerse99(): void
    {
        $verse = $this->song99Bottles->verse(new BottleNumber(99));
        $this->assertEquals('99 bottles of beer on the wall, 99 bottles of beer. Take one down and pass it around, 98 bottles of beer on the wall.', $verse);
    }

    public function testVerse98(): void
    {
        $verse = $this->song99Bottles->verse(new BottleNumber(98));
        $this->assertEquals('98 bottles of beer on the wall, 98 bottles of beer. Take one down and pass it around, 97 bottles of beer on the wall.', $verse);
    }

    public function testVerse97(): void
    {
        $verse = $this->song99Bottles->verse(new BottleNumber(97));
        $this->assertEquals('97 bottles of beer on the wall, 97 bottles of beer. Take one down and pass it around, 96 bottles of beer on the wall.', $verse);
    }
}
