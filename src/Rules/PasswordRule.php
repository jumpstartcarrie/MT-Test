<?php namespace csullivan\Rules\UrlRule;
 
class PasswordRule implements RuleInterface
{
    /**
    * The Error Message
    *
    * @var string
    */
    protected $error = 'Password must be at least 8 characters long and contain a mixture of uppercase/lowercase and at least one digit or symbol';

    /**
    * Check we need to perform for this rule
    *
    * @return filtered data
    */
    public function ruleCheck($value)
    {
        return (preg_match_all('^.(?=.{8,})(?=.[a-z])(?=.[A-Z])(?=.[\d\W]).*$', $value)) ? true : false;
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

