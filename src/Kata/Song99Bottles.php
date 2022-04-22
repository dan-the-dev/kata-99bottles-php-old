<?php

namespace Kata;

class Song99Bottles
{
    public function getVerseFirstLine(int $numberOfBottles): string
    {
        return "$numberOfBottles bottles of beer on the wall, $numberOfBottles bottles of beer.";
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
