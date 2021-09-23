<?php

namespace Kata;

class Song99Bottles
{
    public function verse(int $currentBottles): array
    {
        $remainingBottles = $currentBottles - 1;
        return [
            "$currentBottles bottles of beer on the wall, $currentBottles bottles of beer.",
            "Take one down and pass it around, {$remainingBottles} bottles of beer on the wall."
        ];
    }
}
