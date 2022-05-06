<?php
declare(strict_types=1);

namespace Kata;

final class Verse
{
    private string $firstLine;
    private string $secondLine;

    public function __construct(string $firstLine, string $secondLine)
    {
        $this->firstLine = $firstLine;
        $this->secondLine = $secondLine;
    }

    /**
     * @return array<string>
     */
    public function verseStructure(): array
    {
        return [
            $this->firstLine,
            $this->secondLine
        ];
    }

}