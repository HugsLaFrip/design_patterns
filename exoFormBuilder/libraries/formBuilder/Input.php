<?php

class Input
{
  private $name;
  private $label;
  private $type;

  public function __construct(string $name, string $type, string $label = '')
  {
    $this->name = $name;
    $this->type = $type;
    $this->label = $label;
  }

  public function generate()
  {
    return '
      <label>
        ' . $this->label . '
        <input name="' . $this->name . '" type="' . $this->type . '" />
      </label>
    ';
  }
}
