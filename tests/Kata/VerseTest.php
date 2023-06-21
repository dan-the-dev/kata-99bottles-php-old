<?php

namespace Kata;

use PHPUnit\Framework\TestCase;

class VerseTest extends TestCase
{

    public function testVerse99(): void
    {
        $verse = new Verse(new BottleNumber(99));
        $expectedVerse = '99 bottles of beer on the wall, 99 bottles of beer. Take one down and pass it around, 98 bottles of beer on the wall.';
        $this->assertEquals($expectedVerse, $verse->value);
    }

    public function testVerse50(): void
    {
        $verse = new Verse(new BottleNumber(50));
        $expectedVerse = '50 bottles of beer on the wall, 50 bottles of beer. Take one down and pass it around, 49 bottles of beer on the wall.';
        $this->assertEquals($expectedVerse, $verse->value);
    }

    public function testVerse3(): void
    {
        $verse = new Verse(new BottleNumber(3));
        $expectedVerse = '3 bottles of beer on the wall, 3 bottles of beer. Take one down and pass it around, 2 bottles of beer on the wall.';
        $this->assertEquals($expectedVerse, $verse->value);
    }

    public function testVerse2(): void
    {
        $verse = new Verse(new BottleNumber(2));
        $expectedVerse = '2 bottles of beer on the wall, 2 bottles of beer. Take one down and pass it around, 1 bottle of beer on the wall.';
        $this->assertEquals($expectedVerse, $verse->value);
    }

    public function testVerse1(): void
    {
        $verse = new Verse(new BottleNumber(1));
        $expectedVerse = '1 bottle of beer on the wall, 1 bottle of beer. Take one down and pass it around, no more bottles of beer on the wall.';
        $this->assertEquals($expectedVerse, $verse->value);
    }

    public function testVerse0(): void
    {
        $verse = new Verse(new BottleNumber(0));
        $expectedVerse = 'No more bottles of beer on the wall, no more bottles of beer. Go to the store and buy some more, 99 bottles of beer on the wall.';
        $this->assertEquals($expectedVerse, $verse->value);
    }
}
