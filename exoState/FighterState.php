<?php

require_once 'Fighter.php';

interface FighterState
{
    public function attack(Fighter $fighterAtk, Fighter $fighterDef): void;
}
