<?php

namespace Kata;

class Song99Bottles
{
    public function getVerseFirstLine(int $numberOfBottles): string
    {
        $noun = $this->getBottlesNoun($numberOfBottles);
        $numberOfBottles = $this->getNumberOfBottlesString($numberOfBottles);
        return ucfirst("{$numberOfBottles} {$noun} of beer on the wall, {$numberOfBottles} {$noun} of beer.");
    }

    public function getVerseSecondLine(int $numberOfBottles): string
    {
        $intro = $this->getIntroFromBottlesNumber($numberOfBottles);
        $numberOfBottles--;
        $noun = $this->getBottlesNoun($numberOfBottles);
        $numberOfBottles = $this->restartFrom99IfNegative($numberOfBottles);
        $numberOfBottles = $this->getNumberOfBottlesString($numberOfBottles);
        return "$intro, {$numberOfBottles} {$noun} of beer on the wall.";
    }

    /**
     * @return array<string>
     */
    public function getVerse(int $verseNumber): array
    {
        return [
            $this->getVerseFirstLine($verseNumber),
            $this->getVerseSecondLine($verseNumber),
        ];
    }

    /**
     * @param int $numberOfBottles
     * @return string
     */
    private function getBottlesNoun(int $numberOfBottles): string
    {
        return $numberOfBottles === 1 ? 'bottle' : 'bottles';
    }

    /**
     * @param int $numberOfBottles
     * @return int|string
     */
    private function getNumberOfBottlesString(int $numberOfBottles)
    {
        return $numberOfBottles === 0 ? 'no more' : $numberOfBottles;
    }

    /**
     * @param int $numberOfBottles
     * @return int
     */
    private function restartFrom99IfNegative(int $numberOfBottles): int
    {
        return $numberOfBottles < 0 ? 99 : $numberOfBottles;
    }

    /**
     * @param int $numberOfBottles
     * @return string
     */
    private function getIntroFromBottlesNumber(int $numberOfBottles): string
    {
        return $numberOfBottles === 0 ? 'Go to the store and buy some more' : 'Take one down and pass it around';
    }
}
