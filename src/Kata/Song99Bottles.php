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
        $currentBottlesNoun = $this->calculateBottleNoun($currentBottles);
        $remainingBottlesNoun = $this->calculateBottleNoun($remainingBottles);
        return new SongVerse(
            "$currentBottles $currentBottlesNoun of beer on the wall, $currentBottles $currentBottlesNoun of beer.",
            "Take one down and pass it around, $remainingBottles $remainingBottlesNoun of beer on the wall."
        );
    }

    /**
     * @param $remainingBottles
     * @return string
     */
    private function calculateBottleNoun($remainingBottles): string
    {
        return $remainingBottles === 1 ? 'bottle' : 'bottles';
    }
}
