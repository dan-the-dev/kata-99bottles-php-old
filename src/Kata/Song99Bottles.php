<?php

namespace Kata;

class Song99Bottles
{
    public function getVerseFirstLine(): string
    {
        return '99 bottles of beer on the wall, 99 bottles of beer.';
    }

    public function getVerseSecondLine(): string
    {
        return 'Take one down and pass it around, 98 bottles of beer on the wall.';
    }

    public function getVerse(): array
    {
        return [
            '99 bottles of beer on the wall, 99 bottles of beer.',
            'Take one down and pass it around, 98 bottles of beer on the wall.',
        ];
    }
}
