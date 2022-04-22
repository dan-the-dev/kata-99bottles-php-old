<?php

namespace Kata;

class Song99Bottles
{
    public function getVerseFirstLine(int $numberOfBottles): string
    {
        $noun = $numberOfBottles === 1 ? 'bottle' : 'bottles';
        return "{$numberOfBottles} {$noun} of beer on the wall, {$numberOfBottles} {$noun} of beer.";
    }

    public function getVerseSecondLine(): string
    {
        return 'Take one down and pass it around, 98 bottles of beer on the wall.';
    }

    public function getVerse(): array
    {
        return [
            $this->getVerseFirstLine(99),
            $this->getVerseSecondLine(),
        ];
    }
}
