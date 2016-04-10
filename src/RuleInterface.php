<?php namespace csullivan\RuleInterface;

interface RuleInterface
{
    /**
    * The function to check if the data passes the rule
    *
    * @param mixed $value
    */
    public function ruleCheck($value);

    /**
    * The function we call if the check fails
    *
    * @return string
    */
    public function setError();
}

