<?php

class PersonIterator implements \Iterator
{
  private $persons;
  private $index;

  public function __construct(array $persons)
  {
    $this->persons = $persons;
    $this->index = 0;
  }

  public function current(): Person
  {
    return $this->persons[$this->index];
  }

  public function next(): void
  {
    $this->index++;
  }

  public function key(): int
  {
    return $this->index;
  }

  public function valid(): bool
  {
    return isset($this->persons[$this->index]);
  }

  public function rewind(): void
  {
    $this->index = 0;
  }
}
