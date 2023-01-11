<?php

class Person
{
  private $id;
  private $name;
  private $relations = [];

  public function __construct(string $id, string $name)
  {
    $this->id = $id;
    $this->name = $name;
  }

  public function getId(): string
  {
    return $this->id;
  }

  public function getName(): string
  {
    return $this->name;
  }

  public function addRelation(Person $person): void
  {
    $this->relations[] = $person;
  }

  public function getRelations(): array
  {
    return $this->relations;
  }
}
