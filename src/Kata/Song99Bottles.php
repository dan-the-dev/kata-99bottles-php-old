<?php

namespace Kata;

class Song99Bottles
{
    public function verse(int $currentBottles): SongVerse
    {
        $remainingBottles = $currentBottles - 1;
        if ($remainingBottles === 0) {
            $remainingBottles = 'no more';
        }
        $currentBottlesNoun = $currentBottles === 1 ? 'bottle' : 'bottles';
        $remainingBottlesNoun = $remainingBottles === 1 ? 'bottle' : 'bottles';
        return new SongVerse(
            "$currentBottles $currentBottlesNoun of beer on the wall, $currentBottles $currentBottlesNoun of beer.",
            "Take one down and pass it around, $remainingBottles $remainingBottlesNoun of beer on the wall."
        );
    }
}
