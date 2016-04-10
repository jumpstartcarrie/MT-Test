<?php namespace csullivan\validator;

interface ValidatorInterface
{
    /**
    * The function we call to test if the data passes validation
    *
    * @var array
    */
    public function validate();

    /**
    * The function we call if there are validation errors
    *
    * @var array
    */
    public function errors();
}

