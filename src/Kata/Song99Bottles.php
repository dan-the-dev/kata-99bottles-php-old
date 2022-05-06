<?php

namespace Kata;

class Song99Bottles
{
    public function getVerseFirstLine(BottlesNumber $bottlesNumber): string
    {
        $noun = $this->getBottlesNoun($bottlesNumber->getValue());
        $numberOfBottles = $this->getNumberOfBottlesString($bottlesNumber->getValue());
        return ucfirst("{$numberOfBottles} {$noun} of beer on the wall, {$numberOfBottles} {$noun} of beer.");
    }

    public function getVerseSecondLine(BottlesNumber $bottlesNumber): string
    {
        $numberOfBottles = $bottlesNumber->getValue();
        $intro = $this->getIntroFromBottlesNumber($numberOfBottles);
        $decreasedBottlesNumber = new BottlesNumber($numberOfBottles-1);
        $decreasedNumberOfBottles = $decreasedBottlesNumber->getValue();
        $noun = $this->getBottlesNoun($decreasedNumberOfBottles);
        $decreasedNumberOfBottles = $this->restartFrom99IfNegative($decreasedNumberOfBottles);
        $decreasedNumberOfBottles = $this->getNumberOfBottlesString($decreasedNumberOfBottles);
        return "$intro, {$decreasedNumberOfBottles} {$noun} of beer on the wall.";
    }

    /**
     * @return array<string>
     */
    public function getVerse(int $verseNumber): array
    {
        return [
            $this->getVerseFirstLine(new BottlesNumber($verseNumber)),
            $this->getVerseSecondLine(new BottlesNumber($verseNumber)),
        ];
    }

    /** @return array<string> */
    public function getFullSong(): array
    {
        $song = [];
        for ($bottles=99; $bottles>=0; $bottles--) {
            $song = array_merge($song, $this->getVerse($bottles));
        }
        return $song;
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
