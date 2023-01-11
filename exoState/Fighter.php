<?php

require_once 'FighterState.php';

interface Fighter
{
    public function name(): string;

    public function health(): int;

    public function strength(): int;

    public function attack(Fighter $monster): void;

    public function changeState(FighterState $state): Fighter;

    public function isDead(): bool;
}
