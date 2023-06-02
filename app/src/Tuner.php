<?php
declare(strict_types=1);

namespace App;

class Tuner
{
    private Amplifier $amplifier;

    public function on(): void
    {
        echo '<li>Tuner turns on</li>', PHP_EOL;
    }

    public function off(): void
    {
        echo '<li>Tuner turns off</li>', PHP_EOL;
    }

    public function setAm(): void
    {
        echo '<li>Tuner is set to AM</li>', PHP_EOL;
    }

    public function setFm(): void
    {
        echo '<li>Tuner is set to FM</li>', PHP_EOL;
    }

    public function setFrequency(float $frequency): void
    {
        echo sprintf('<li>Tuner frequency is set to %.2F</li>%s', $frequency, PHP_EOL);
    }


}