<?php

namespace Kata;

class Song99Bottles
{
    public function verse(BottleNumber $bottleNumber): Verse
    {
        $bottlesNumberSubOne = $bottleNumber->removeBottle();
        return new Verse("$bottleNumber bottles of beer on the wall, $bottleNumber bottles of beer. Take one down and pass it around, $bottlesNumberSubOne bottles of beer on the wall.");
    }
}
