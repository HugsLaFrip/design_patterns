<?php

abstract class PriceBuilder
{
  private $typePrice = 0;
  private $ballsPrice = 0;
  private $extraPrice = 0;

  private $availableType = [
    'Classic' => 500,
    'Gauffre' => 600,
    'Pot' => 400
  ];

  private $availableBalls = [
    '1' => 0,
    '2' => 200,
    '3' => 400,
    '4' => 600
  ];

  private $availableParfume = [
    '' => 0,
    'Chocolat' => 200,
    'Fraise' => 200,
    'Framboise' => 200,
    'Caramel' => 200,
    'Noix' => 300,
    'Speculos' => 300
  ];

  private $totalPrice = 0;

  public function setTypePrice(string $type): void
  {
    $this->typePrice = $this->availableType[$type];
  }

  public function getTypePrice(): int
  {
    return $this->typePrice;
  }

  public function setBallsPrice(string $numberOfBalls): void
  {
    $this->ballsPrice = $this->availableBalls[$numberOfBalls];
  }

  public function getBallsPrice(): int
  {
    return $this->ballsPrice;
  }

  public function setExtraPrice(string $extra): void
  {
    $this->extraPrice = $this->availableParfume[$extra];
  }

  public function getExtraPrice(): int
  {
    return $this->extraPrice;
  }

  public function getAvailableParfume(): array
  {
    return $this->availableParfume;
  }

  public function getAvailableType(): array
  {
    return $this->availableType;
  }

  public function getAvailableBalls(): array
  {
    return $this->availableBalls;
  }

  public function setTotalPrice(): void
  {
    $this->totalPrice = $this->typePrice + $this->extraPrice + $this->ballsPrice;
  }

  public function getTotalPrice(): int
  {
    $this->setTotalPrice();
    return $this->totalPrice;
  }
}
