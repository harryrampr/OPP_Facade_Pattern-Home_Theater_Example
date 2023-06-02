<?php
declare(strict_types=1);

namespace App;

class PopcornPopper
{
    public function on(): void
    {
        echo '<li>Popcorn Popper turns on</li>', PHP_EOL;
    }

    public function off(): void
    {
        echo '<li>Popcorn Popper turns off</li>', PHP_EOL;
    }

    public function pop(): void
    {
        echo '<li>Popcorn Popper popping popcorn</li>', PHP_EOL;
    }
}