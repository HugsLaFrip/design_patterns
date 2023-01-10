<?php
require 'IceCreamBuilder.php';
require 'PriceBuilder.php';

class IceCream extends PriceBuilder implements IceCreamBuilder
{
  private $type = '';
  private $parfume = '';
  private $extra = '';
  private $numberOfBalls = 0;

  public function setType(string $type): void
  {
    $this->setTypePrice($type);
    $this->type = $type;
  }

  public function getType(): string
  {
    return $this->type;
  }

  public function setParfume(string $parfume): void
  {
    $this->parfume = $parfume;
  }

  public function getParfume(): string
  {
    return $this->parfume;
  }

  public function setExtra(string $extra): void
  {
    $this->setExtraPrice($extra);
    $this->extra = $extra;
  }

  public function getExtra(): string
  {
    return $this->extra;
  }

  public function setNumberOfBalls(int $numberOfBalls): void
  {
    $this->setBallsPrice($numberOfBalls);
    $this->numberOfBalls = $numberOfBalls;
  }

  public function getNumberOfBalls(): int
  {
    return $this->numberOfBalls;
  }

  public function __toString(): string
  {
    return 'Prix total : ' + $this->getTotalPrice();
  }
}
