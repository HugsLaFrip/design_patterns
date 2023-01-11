<?php

require_once 'Fighter.php';
require_once 'FighterState.php';
require_once 'States/Healthy.php';

final class Daze implements FighterState
{
    public function attack(Fighter $FighterAtk, Fighter $FighterDef): void
    {
        echo $FighterAtk->name() . ' est confus...' . PHP_EOL;
    }
}
