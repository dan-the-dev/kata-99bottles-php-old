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

    public function only2BottlesLeft(): bool
    {
        return $this->equalsTo(new BottleNumber(2));
    }

    public function only1BottlesLeft(): bool
    {
        return $this->equalsTo(new BottleNumber(1));
    }

    private function equalsTo(BottleNumber $anotherBottleNumber): bool
    {
        return $this->value === $anotherBottleNumber->value;
    }
}