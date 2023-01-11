<?php

require_once 'Fighter.php';
require_once 'FighterState.php';

final class Rage implements FighterState
{
    public function attack(Fighter $FighterAtk, Fighter $FighterDef): void
    {
        $strength = $FighterAtk->strength();

        if ($this->isTooMuchAngry()) {
            $FighterAtk->healthPoints -= $strength;

            echo $FighterAtk->name() . ' est fou et s\'inflige ' . $strength . ' de dégats' . PHP_EOL;
        } else {
            $FighterDef->healthPoints -= $strength;

            echo $FighterAtk->name() . ' attaque malgré sa folie ! -' . $strength . ' pts de vie pour ' . $FighterDef->name() . PHP_EOL;
        }
    }

    private function isTooMuchAngry(): bool
    {
        return rand(0, 100) > 66;
    }
}
