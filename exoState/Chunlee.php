<?php

require_once 'Fighter.php';
require_once 'FighterState.php';
require_once 'States/Healthy.php';

final class Chunlee implements Fighter
{
    /** @var FighterState */
    private $state;

    public $healthPoints;

    public function __construct()
    {
        $this->changeState(new Healthy());
        $this->healthPoints = 60;
    }

    public function name(): string
    {
        return 'Chunlee';
    }

    public function health(): int
    {
        return $this->healthPoints;
    }

    public function strength(): int
    {
        return 19;
    }

    public function attack(Fighter $Fighter): void
    {
        $this->state->attack($this, $Fighter);
    }

    public function changeState(FighterState $state): Fighter
    {
        $this->state = $state;

        return $this;
    }

    public function isDead(): bool
    {
        return $this->healthPoints <= 0;
    }
}
