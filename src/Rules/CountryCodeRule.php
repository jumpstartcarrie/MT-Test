<?php namespace csullivan\Rules\UrlRule;
 
class CountryCodeRule implements RuleInterface
{
    /**
    * The Error Message
    *
    * @var string
    */
    protected $error = 'Must be a valid ISO Country Code';

    /**
    * Check we need to perform for this rule
    *
    * @return filtered data
    */
    public function ruleCheck($value)
    {
        // code goes here
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

