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
        $numberOfBottles--;
        return "Take one down and pass it around, {$numberOfBottles} bottles of beer on the wall.";
    }

    public function getVerse(): array
    {
        return [
            $this->getVerseFirstLine(99),
            $this->getVerseSecondLine(99),
        ];
    }
}
