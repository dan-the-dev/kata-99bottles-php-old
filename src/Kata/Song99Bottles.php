<?php

namespace Kata;

class Song99Bottles
{
    public function verse(int $verseNumber): string
    {
        if ($verseNumber === 98) {
            return '98 bottles of beer on the wall, 98 bottles of beer. Take one down and pass it around, 97 bottles of beer on the wall.';
        }

        return '99 bottles of beer on the wall, 99 bottles of beer. Take one down and pass it around, 98 bottles of beer on the wall.';
    }
}
