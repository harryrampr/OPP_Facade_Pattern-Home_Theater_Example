<?php
declare(strict_types=1);

require_once __DIR__ . '/../../vendor/autoload.php';

use App\Amplifier;
use App\CdPlayer;
use App\DvdPlayer;
use App\HomeTheaterFacade;
use App\PopcornPopper;
use App\Projector;
use App\Screen;
use App\TheaterLights;
use App\Tuner;

$amp = new Amplifier();
$tuner = new Tuner();
$dvd = new DvdPlayer();
$cd = new CdPlayer();
$projector = new Projector();
$screen = new Screen();
$lights = new TheaterLights();
$popper = new PopcornPopper();

$homeTheater = new HomeTheaterFacade($amp, $tuner, $dvd, $cd,
    $projector, $lights, $screen, $popper);

echo '<h1>Home Theater Simulation</h1>', PHP_EOL;

$homeTheater->watchMovie('Raiders of the Lost Ark');
$homeTheater->endMovie();