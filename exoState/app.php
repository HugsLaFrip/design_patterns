<?php

require_once 'Game.php';
require_once 'Chunlee.php';
require_once 'Ken.php';

/**
 * Streeet Fighttter !
 * Les états possibles des combattants sont ajoutés de manière aléatoire.
 */
$chunlee = new Chunlee();
$ken = new Ken();

$game = new Game($chunlee, $ken);
$result = $game->startGame();
