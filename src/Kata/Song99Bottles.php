<?php

namespace Kata;

class Song99Bottles
{
    private function calculateVerseFromCurrentBottleNumber(BottleNumber $currentBottleNumber): Verse
    {
        return new Verse($currentBottleNumber);
    }
}
