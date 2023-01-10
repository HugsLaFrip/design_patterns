<?php

require './libraries/formBuilder/FormBuilder.php';

class LoginForm extends FormBuilder
{
  public function __construct()
  {
    parent::__construct(new Form('loginForm', '/login', 'POST'));
  }

  public function generate()
  {
    $buttons = new Wrapper();
    $buttons
      ->add(new Input('submit', 'submit'))
      ->add(new Input('reset', 'reset'));

    return $this->form
      ->add(new Input('firstName', 'text', 'Prénom'))
      ->add(new Input('lastName', 'text', 'Nom de famille'))
      ->add($buttons)
      ->generate();
  }
}
