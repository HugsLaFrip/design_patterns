<?php

interface IceCreamBuilder
{
  public function setType(string $type);
  public function setParfume(string $parfume);
  public function setExtra(string $extra);
  public function setNumberOfBalls(int $numberOfBalls);
}
