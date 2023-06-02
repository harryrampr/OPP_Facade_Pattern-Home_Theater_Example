<?php
declare(strict_types=1);

namespace App;

class DvdPlayer
{
    private Amplifier $amplifier;

    public function on(): void
    {
        echo '<li>DVD Player turns on</li>', PHP_EOL;
    }

    public function off(): void
    {
        echo '<li>DVD Player turns off</li>', PHP_EOL;
    }

    public function eject(): void
    {
        echo '<li>DVD Player ejects DVD</li>', PHP_EOL;
    }

    public function pause(): void
    {
        echo '<li>DVD Player pauses DVD</li>', PHP_EOL;
    }

    public function play(?string $title = null): void
    {
        if (is_null($title)) {
            echo '<li>DVD Player plays DVD</li>', PHP_EOL;
        } else {
            echo sprintf('<li>DVD Player plays %s</li>%s', $title, PHP_EOL);
        }
    }

    public function stop(): void
    {
        echo '<li>DVD Player stops playing DVD</li>', PHP_EOL;
    }

    public function setSurroundAudio(): void
    {
        echo '<li>DVD Player is to set to surround audio</li>', PHP_EOL;
    }

    public function setTwoChannelAudio(): void
    {
        echo '<li>DVD Player is to set to two channel audio</li>', PHP_EOL;
    }

}