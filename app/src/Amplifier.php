<?php
declare(strict_types=1);

namespace App;

class Amplifier
{
    private Tuner $tuner;
    private DvdPlayer $dvdPlayer;
    private CdPlayer $cdPlayer;

    public function on(): void
    {
        echo '<li>Amplifier turns on</li>', PHP_EOL;
    }

    public function off(): void
    {
        echo '<li>Amplifier turns off</li>', PHP_EOL;
    }

    public function setCd(CdPlayer $cd): void
    {
        $this->cdPlayer = $cd;
        echo '<li>Amplifier is set to CD</li>', PHP_EOL;
    }

    public function setDvd(DvdPlayer $dvd): void
    {
        $this->dvdPlayer = $dvd;
        echo '<li>Amplifier is set to DVD</li>', PHP_EOL;
    }

    public function setStereoSound(): void
    {
        echo '<li>Amplifier is set to stereo sound</li>', PHP_EOL;
    }

    public function setSurroundSound(): void
    {
        echo '<li>Amplifier is set to surround sound</li>', PHP_EOL;
    }

    public function setTuner(Tuner $tuner): void
    {
        $this->tuner = $tuner;
        echo '<li>Amplifier is set to tuner</li>', PHP_EOL;
    }

    public function setVolume(int $level): void
    {
        echo sprintf('<li>Amplifier volume is set to %d</li>%s', $level, PHP_EOL);
    }
}