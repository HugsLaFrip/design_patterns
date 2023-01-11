<?php

require './src/models/Person.php';
require './src/iterators/PersonIterator.php';

class ReadIterator
{
  private $persons = [];
  private $relations = [];

  public function __construct()
  {
    $this->readPersons();
    $this->readRelations();
  }

  private function readPersons(): void
  {
    $file = fopen('populations.txt', 'r');

    while (!feof($file)) {
      $line = trim(fgets($file));
      $person = new Person(...explode(', ', $line));
      $this->persons[$person->getId()] = $person;
    }

    fclose($file);
  }

  private function readRelations(): void
  {
    $file = fopen('relationships.txt', 'r');

    while (!feof($file)) {
      $line = trim(fgets($file));
      $persons = explode(', ', $line);

      $person1 = $this->persons[$persons[0]];
      $person2 = $this->persons[$persons[1]];

      $person1->addRelation($person2);
      $person2->addRelation($person1);
    }

    fclose($file);
  }

  public function getIterator(): PersonIterator
  {
    return new PersonIterator($this->persons);
  }
}
