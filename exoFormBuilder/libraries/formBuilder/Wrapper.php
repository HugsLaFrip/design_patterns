<?php

class Wrapper implements FormBuilderInterface
{
  private array $classes = [];
  private array $elements = [];

  public function __construct(array $classes = [])
  {
    $this->classes = $classes;
  }

  public function add($instance)
  {
    $this->elements[] = $instance;

    return $this;
  }

  public function generate()
  {
    $html = '<div class="';

    foreach ($this->classes as $class) {
      $html .= $class . ' ';
    }

    $html .= '">';

    foreach ($this->elements as $elm) {
      $html .= $elm->generate();
    }

    $html .= '</div>';

    return $html;
  }
}
