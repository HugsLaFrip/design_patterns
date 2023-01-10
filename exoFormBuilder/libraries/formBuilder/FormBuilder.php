<?php

require 'Form.php';
require 'Input.php';
require 'Wrapper.php';

abstract class FormBuilder
{
  protected Form $form;

  public function __construct(Form $form)
  {
    $this->form = $form;
  }
}
