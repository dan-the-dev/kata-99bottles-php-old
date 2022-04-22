<?php

namespace Kata;

class Song99Bottles
{
    public function getVerseFirstLine(int $numberOfBottles): string
    {
        $numberOfBottles = $numberOfBottles === 0 ? 'No more' : $numberOfBottles;
        $noun = $numberOfBottles === 1 ? 'bottle' : 'bottles';
        return "{$numberOfBottles} {$noun} of beer on the wall, " . strtolower($numberOfBottles) . " {$noun} of beer.";
    }

    public function getVerseSecondLine(int $numberOfBottles): string
    {
        if ($numberOfBottles === 0){
            return 'Go to the store and buy some more, 99 bottles of beer on the wall.';
        }
        $numberOfBottles--;
        $noun = $numberOfBottles === 1 ? 'bottle' : 'bottles';
        $numberOfBottles = $numberOfBottles === 0 ? 'no more' : $numberOfBottles;
        return "Take one down and pass it around, {$numberOfBottles} {$noun} of beer on the wall.";
    }

    public function getVerse(): array
    {
        return [
            $this->getVerseFirstLine(99),
            $this->getVerseSecondLine(99),
        ];
    }
}
