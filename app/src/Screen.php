<?php
declare(strict_types=1);

namespace App;

class Screen
{
    public function up(): void
    {
        echo '<li>Screen goes up</li>', PHP_EOL;
    }

    public function down(): void
    {
        echo '<li>Screen goes down</li>', PHP_EOL;
    }
}