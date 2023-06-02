<?php
declare(strict_types=1);

namespace App;

class CdPlayer
{
    private Amplifier $amplifier;

    public function on(): void
    {
        echo '<li>CD Player turns on</li>', PHP_EOL;
    }

    public function off(): void
    {
        echo '<li>CD Player turns off</li>', PHP_EOL;
    }

    public function eject(): void
    {
        echo '<li>CD Player ejects CD</li>', PHP_EOL;
    }

    public function pause(): void
    {
        echo '<li>CD Player pauses CD</li>', PHP_EOL;
    }

    public function play(?string $title = null): void
    {
        if (is_null($title)) {
            echo '<li>CD Player plays CD</li>', PHP_EOL;
        } else {
            echo sprintf('<li>CD Player plays %s</li>%s', $title, PHP_EOL);
        }
    }


    public function stop(): void
    {
        echo '<li>CD Player stops playing CD</li>', PHP_EOL;
    }
}