<?php
declare(strict_types=1);

namespace App;

class HomeTheaterFacade
{
    private Amplifier $amp;
    private Tuner $tuner;
    private DvdPlayer $dvd;
    private CdPlayer $cd;
    private Projector $projector;
    private TheaterLights $lights;
    private Screen $screen;
    private PopcornPopper $popper;


    public function __construct(Amplifier     $amp,
                                Tuner         $tuner,
                                DvdPlayer     $dvd,
                                CdPlayer      $cd,
                                Projector     $projector,
                                TheaterLights $lights,
                                Screen        $screen,
                                PopcornPopper $popper)
    {
        $this->amp = $amp;
        $this->tuner = $tuner;
        $this->dvd = $dvd;
        $this->cd = $cd;
        $this->projector = $projector;
        $this->lights = $lights;
        $this->screen = $screen;
        $this->popper = $popper;
    }


    public function watchMovie(string $movie): void
    {
        echo "<h2>Get ready to watch a movie sequence:</h2>\n<ol>", PHP_EOL;
        $this->popper->on();
        $this->popper->pop();
        $this->lights->dim(10);
        $this->screen->down();
        $this->projector->on();
        $this->projector->wideScreenMode();
        $this->amp->on();
        $this->amp->setDvd($this->dvd);
        $this->amp->setSurroundSound();
        $this->amp->setVolume(5);
        $this->dvd->on();
        $this->dvd->play($movie);
        echo '</ol>', PHP_EOL;

    }

    public function endMovie(): void
    {
        echo "<h2>Shutting movie theater down sequence:</h2>\n<ol>", PHP_EOL;
        $this->popper->off();
        $this->lights->on();
        $this->screen->up();
        $this->projector->off();
        $this->amp->off();
        $this->dvd->stop();
        $this->dvd->eject();
        $this->dvd->off();
        echo '</ol>', PHP_EOL;
    }
}