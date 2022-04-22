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
        $intro = $numberOfBottles === 0 ? 'Go to the store and buy some more' : 'Take one down and pass it around';
        $numberOfBottles--;
        $noun = $numberOfBottles === 1 ? 'bottle' : 'bottles';
        $numberOfBottles = $numberOfBottles < 0 ? 99 : $numberOfBottles;
        $numberOfBottles = $numberOfBottles === 0 ? 'no more' : $numberOfBottles;
        return "$intro, {$numberOfBottles} {$noun} of beer on the wall.";
    }

    public function getVerse(): array
    {
        return [
            $this->getVerseFirstLine(99),
            $this->getVerseSecondLine(99),
        ];
    }
}
