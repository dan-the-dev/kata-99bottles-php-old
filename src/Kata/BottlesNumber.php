<?php
declare(strict_types=1);

namespace Kata;

final class BottlesNumber
{
    private int $value;

    public function __construct(int $value)
    {
        $this->value = $value;
    }

    /**
     * @return int
     */
    public function getValue(): int
    {
        return $this->value;
    }

}