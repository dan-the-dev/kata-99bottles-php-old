<?php

namespace Kata;

class SongVerse
{
    /** @var string  */
    private $firstLine;

    /** @var string  */
    private $secondLine;

    public function __construct(string $firstLine, string $secondLine)
    {
        $this->firstLine = lcfirst($firstLine);
        $this->secondLine = lcfirst($secondLine);
    }

    /**
     * @return array<string>
     */
    public function toArray(): array
    {
        return [$this->firstLine, $this->secondLine];
    }
}