<?php

require 'FormBuilderInterface.php';

class Form implements FormBuilderInterface
{
  private string $name;
  private string $action;
  private string $method;
  private array $elements = [];

  public function __construct(string $name, string $action, string $method = 'GET')
  {
    $this->name = $name;
    $this->action = $action;
    $this->method = $method;
  }

  public function add($instance)
  {
    $this->elements[] = $instance;

    return $this;
  }

  public function generate()
  {
    $html = '<form name="' . $this->name . '" action="' . $this->action . '" method="' . $this->method . '">';

    foreach ($this->elements as $elm) {
      $html .= $elm->generate();
    }

    $html .= '</form>';

    return $html;
  }
}
