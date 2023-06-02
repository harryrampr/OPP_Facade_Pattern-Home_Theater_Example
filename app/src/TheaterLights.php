<?php
declare(strict_types=1);

namespace App;

class TheaterLights
{
    public function on(): void
    {
        echo '<li>Theater Lights turn on</li>', PHP_EOL;
    }

    public function off(): void
    {
        echo '<li>Theater Lights turn off</li>', PHP_EOL;
    }

    public function dim(int $percent): void
    {
        echo sprintf('<li>Theater Lights dim to %d%%</li>%s', $percent, PHP_EOL);
    }
}