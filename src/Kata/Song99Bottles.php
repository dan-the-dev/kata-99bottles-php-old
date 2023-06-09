<?php

namespace Kata;

class Song99Bottles
{
    public function verse(int $verseNumber): string
    {
        $verseNumberSubOne = $verseNumber - 1;
        return "$verseNumber bottles of beer on the wall, $verseNumber bottles of beer. Take one down and pass it around, {$verseNumberSubOne} bottles of beer on the wall.";
    }
}
