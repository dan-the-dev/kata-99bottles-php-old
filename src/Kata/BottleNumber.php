<?php

namespace Kata;

readonly class BottleNumber
{
    public function __construct(public int $value)
    {
    }

    public function removeBottle(): BottleNumber
    {
        return new BottleNumber($this->value-1);
    }

    public function __toString(): string
    {
        return "$this->value";
    }
}