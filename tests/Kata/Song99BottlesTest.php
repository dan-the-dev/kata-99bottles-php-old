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
        $verse = $this->song99Bottles->calculateVerseFromCurrentBottleNumber(new BottleNumber(99));
        $expectedVerse = new Verse('99 bottles of beer on the wall, 99 bottles of beer. Take one down and pass it around, 98 bottles of beer on the wall.');
        $this->assertEquals($expectedVerse, $verse);
    }

    public function testVerse50(): void
    {
        $verse = $this->song99Bottles->calculateVerseFromCurrentBottleNumber(new BottleNumber(50));
        $expectedVerse = new Verse('50 bottles of beer on the wall, 50 bottles of beer. Take one down and pass it around, 49 bottles of beer on the wall.');
        $this->assertEquals($expectedVerse, $verse);
    }

    public function testVerse3(): void
    {
        $verse = $this->song99Bottles->calculateVerseFromCurrentBottleNumber(new BottleNumber(3));
        $expectedVerse = new Verse('3 bottles of beer on the wall, 3 bottles of beer. Take one down and pass it around, 2 bottles of beer on the wall.');
        $this->assertEquals($expectedVerse, $verse);
    }

    public function testVerse2(): void
    {
        $verse = $this->song99Bottles->calculateVerseFromCurrentBottleNumber(new BottleNumber(2));
        $expectedVerse = new Verse('2 bottles of beer on the wall, 2 bottles of beer. Take one down and pass it around, 1 bottle of beer on the wall.');
        $this->assertEquals($expectedVerse, $verse);
    }
}
