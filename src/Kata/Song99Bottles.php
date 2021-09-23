<?php

namespace Kata;

class Song99Bottles
{
    public function verse(int $currentBottles): SongVerse
    {
        $remainingBottles = $currentBottles - 1;
        $currentBottlesNoun = $this->calculateBottleNoun($currentBottles);
        $remainingBottlesNoun = $this->calculateBottleNoun($remainingBottles);

        $actionPhrase = "Take one down and pass it around";
        if ($currentBottles === 0) {
            $currentBottles = 'no more';
            $actionPhrase = "Go to the store and buy some more";
        }
        if ($remainingBottles === 0) {
            $remainingBottles = 'no more';
        }
        if ($remainingBottles < 0) {
            $remainingBottles = 99;
        }

        return new SongVerse(
            "$currentBottles $currentBottlesNoun of beer on the wall, $currentBottles $currentBottlesNoun of beer.",
            "$actionPhrase, $remainingBottles $remainingBottlesNoun of beer on the wall."
        );
    }

    /**
     * @param $bottles
     * @return string
     */
    private function calculateBottleNoun(int $bottles): string
    {
        return $bottles === 1 ? 'bottle' : 'bottles';
    }
}
