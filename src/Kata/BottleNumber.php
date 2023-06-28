<?php

namespace Kata;

readonly class BottleNumber
{
    public function __construct(public int $value)
    {
    }

    public function __toString(): string
    {
        if ($this->noMoreBottlesLeft()) return "no more";

        return "$this->value";
    }

    public function only2BottlesLeft(): bool
    {
        return $this->equalsTo(new BottleNumber(2));
    }

    public function only1BottlesLeft(): bool
    {
        return $this->equalsTo(new BottleNumber(1));
    }

    public function noMoreBottlesLeft(): bool
    {
        return $this->equalsTo(new BottleNumber(0));
    }

    private function equalsTo(BottleNumber $anotherBottleNumber): bool
    {
        return $this->value === $anotherBottleNumber->value;
    }
}