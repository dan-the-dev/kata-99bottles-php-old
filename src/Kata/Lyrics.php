<?php

namespace Kata;

class Lyrics
{

    public function generate(BottleNumber $bottleNumber): array
    {
        $values = [];
        while ($bottleNumber->value >= 0) {
            $values[] = (new Verse($bottleNumber))->value;
            $bottleNumber = new BottleNumber($bottleNumber->value - 1);
        }
        return $values;
    }
}