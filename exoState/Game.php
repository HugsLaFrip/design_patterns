<?php

require_once 'States/Rage.php';
require_once 'States/Healthy.php';
require_once 'States/Daze.php';

class Game
{
    private $Fighter1;
    private $Fighter2;

    public function __construct(Fighter $Fighter1, Fighter $Fighter2)
    {
        $this->Fighter1 = $Fighter1;
        $this->Fighter2 = $Fighter2;
    }

    public function startGame()
    {
        $states = [
            new Healthy(),
            new Daze(),
            new Rage(),
        ];

        echo $this->Fighter1->name() . ' possède ' . $this->Fighter1->health() . ' points de vie' . PHP_EOL;
        echo $this->Fighter2->name() . ' possède ' . $this->Fighter2->health() . " points de vie \n\n";

        while (!$this->Fighter1->isDead() && !$this->Fighter2->isDead()) {
            $this->Fighter1->attack($this->Fighter2);
            $this->Fighter2->attack($this->Fighter1);

            $this->Fighter1->changeState($states[array_rand($states)]);
            $this->Fighter2->changeState($states[array_rand($states)]);

            $this->showHealthPoints($this->Fighter1, $this->Fighter2);
        }

        if ($this->Fighter1->health() < $this->Fighter2->health()) {
            echo $this->Fighter2->name() . ' a gagné le combat ! ✨' . PHP_EOL;
        } else {
            echo $this->Fighter1->name() . ' a gagné le combat ! ✨' . PHP_EOL;
        }
    }

    private function showHealthPoints(Fighter $fighter1, Fighter $fighter2)
    {
        echo "----------\n";
        echo "Points de vie restant : \n";
        echo $fighter1->name() . ' : ' . $fighter1->health() . PHP_EOL;
        echo $fighter2->name() . ' : ' . $fighter2->health() . PHP_EOL;
        echo "----------\n\n";
    }
}
