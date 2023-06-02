<?php
declare(strict_types=1);

namespace App;

class Projector
{
    public function on(): void
    {
        echo '<li>Projector turns on</li>', PHP_EOL;
    }

    public function off(): void
    {
        echo '<li>Projector turns off</li>', PHP_EOL;
    }

    public function tvMode(): void
    {
        echo '<li>Projector is set to TV mode</li>', PHP_EOL;
    }

    public function wideScreenMode(): void
    {
        echo '<li>Projector is set to wide screen mode</li>', PHP_EOL;
    }

}