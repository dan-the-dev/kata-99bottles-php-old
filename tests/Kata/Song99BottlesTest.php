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
            $this->song99Bottles->getLyrics()
        );
    }
}
