<?php

namespace Kata;

readonly class Verse
{
    public string $value;

    public function __construct(BottleNumber $currentBottleNumber)
    {
        $futureBottleNumber = $currentBottleNumber->removeBottle();

        if ($currentBottleNumber->only2BottlesLeft()) {
            $this->value = "$currentBottleNumber bottles of beer on the wall, $currentBottleNumber bottles of beer. Take one down and pass it around, $futureBottleNumber bottle of beer on the wall.";
            return;
        }

        if ($currentBottleNumber->only1BottlesLeft()) {
            $this->value = "$currentBottleNumber bottle of beer on the wall, $currentBottleNumber bottle of beer. Take one down and pass it around, no more bottles of beer on the wall.";
            return;
        }

        $this->value = "$currentBottleNumber bottles of beer on the wall, $currentBottleNumber bottles of beer. Take one down and pass it around, $futureBottleNumber bottles of beer on the wall.";
    }
}