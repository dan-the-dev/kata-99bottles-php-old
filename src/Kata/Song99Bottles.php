<?php

namespace Kata;

class Song99Bottles
{
    public function verse(BottleNumber $bottleNumber): string
    {
        $bottlesNumberSubOne = $bottleNumber->value - 1;
        return "{$bottleNumber->value} bottles of beer on the wall, {$bottleNumber->value} bottles of beer. Take one down and pass it around, $bottlesNumberSubOne bottles of beer on the wall.";
    }
}
