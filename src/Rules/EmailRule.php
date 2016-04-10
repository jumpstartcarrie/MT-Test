<?php namespace csullivan\Rules\EmailRule;
 
class EmailRule implements RuleInterface
{
    /**
    * The Error Message
    *
    * @var string
    */
    protected $error = 'Must be a valid email address';

    /**
    * Check we need to perform for this rule
    *
    * @return mixed data
    */
    public function ruleCheck($value)
    {
        return filter_var($value, FILTER_VALIDATE_EMAIL) !== false;
    }

    /**
    * Set error
    *
    * @return string
    */
    public function setError()
    {
        return $this->error;
    }
}

