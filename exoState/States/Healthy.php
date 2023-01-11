<?php

require_once 'Fighter.php';
require_once 'FighterState.php';

final class Healthy implements FighterState
{
    public function attack(Fighter $FighterAtk, Fighter $FighterDef): void
    {
        $miss = rand(0, 100) < 20;
        if ($miss) {
            echo $FighterAtk->name() . ' rate son attaque...' . PHP_EOL;
            return;
        }

        $strength = $FighterAtk->strength();
        $msg = $FighterAtk->name() . ' attaque ! Il inflige ' . $strength . ' de dégâts' . PHP_EOL;

        $critical = rand(0, 100) > 90;
        if ($critical) {
            $strength *= 2;
            $msg = $FighterAtk->name() . ' effectue un coup critique ! Il inflige ' . $strength . ' de dégâts' . PHP_EOL;
        }

        $FighterDef->healthPoints -= $strength;
        echo $msg;
    }
}
