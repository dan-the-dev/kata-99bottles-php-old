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
        $verse = $this->song99Bottles->verse(99);
        $this->assertEquals('99 bottles of beer on the wall, 99 bottles of beer. Take one down and pass it around, 98 bottles of beer on the wall.', $verse);
    }
}
