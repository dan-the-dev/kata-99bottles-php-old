<?php

namespace Kata;

class Song99Bottles
{
    public function calculateVerseFromCurrentBottleNumber(BottleNumber $currentBottleNumber): Verse
    {
        $futureBottleNumber = $currentBottleNumber->removeBottle();
        return new Verse("$currentBottleNumber bottles of beer on the wall, $currentBottleNumber bottles of beer. Take one down and pass it around, $futureBottleNumber bottles of beer on the wall.");
    }
}
