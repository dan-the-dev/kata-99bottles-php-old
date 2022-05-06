<?php

namespace Kata;

class Song99Bottles
{
    public function getVerseFirstLine(VerseNumber $bottlesNumber): string
    {
        $noun = $this->getBottlesNoun($bottlesNumber->getValue());
        $numberOfBottles = $this->getNumberOfBottlesString($bottlesNumber->getValue());
        return ucfirst("{$numberOfBottles} {$noun} of beer on the wall, {$numberOfBottles} {$noun} of beer.");
    }

    public function getVerseSecondLine(VerseNumber $bottlesNumber): string
    {
        $numberOfBottles = $bottlesNumber->getValue();
        $intro = $this->getIntroFromBottlesNumber($numberOfBottles);
        $decreasedBottlesNumber = new VerseNumber($numberOfBottles-1);
        $decreasedNumberOfBottles = $decreasedBottlesNumber->getValue();
        $noun = $this->getBottlesNoun($decreasedNumberOfBottles);
        $decreasedNumberOfBottles = $this->restartFrom99IfNegative($decreasedNumberOfBottles);
        $decreasedNumberOfBottles = $this->getNumberOfBottlesString($decreasedNumberOfBottles);
        return "$intro, {$decreasedNumberOfBottles} {$noun} of beer on the wall.";
    }

    public function getVerse(VerseNumber $verseNumber): Verse
    {
        return new Verse($this->getVerseFirstLine($verseNumber), $this->getVerseSecondLine($verseNumber));
    }

    /** @return array<string> */
    public function getFullSong(): array
    {
        $song = [];
        for ($bottles=99; $bottles>=0; $bottles--) {
            $verse = $this->getVerse(new VerseNumber($bottles));
            $song = array_merge($song, $verse->verseStructure());
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
