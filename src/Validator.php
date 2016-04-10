<?php namespace csullivan\validator;

use csullivan\ValidatorInterface;

abstract class Validator implements ValidatorInterface
{
    /**
    * The validator object
    *
    * @var object
    */
    protected $validator;

    /**
    * The data to be validated
    *
    * @var array
    */
    protected $data = array();

    /**
    * The validation Rules
    *
    * @var array
    */
    protected $rules = array();

    /**
    * Validation errors
    *
    * @var array
    */
    protected $errors = array();

    /**
     * Pass the data and the rule(s) to the validator
     *
     * @param string $action
     * @return bool
     */
    public function validate(array $data)
    {
        // accept an array of data
        $this->data = $data;
        // loop through the data and get the rule(s) we want to apply
        foreach($data as $field => $value)
        {
            $rules = explode('|', $rules[$field]);
            foreach ($rules as $rule)
            {
                // Get the rule class (e.g. EmailRule)
                $ruleClass = 'csullivan\\Rules\\' . ucfirst($rule) . 'Rule';
                // create an instance of that class
                $ruleObject = new $ruleClass();
                // and call the RuleCheck method to see if the data passes
                $valid = $ruleObject->RuleCheck($value);
                if (!$valid)
                {
                    $errorMessage = $ruleObject->setError();
                    $this->errors();
                }
            }
        }
    }

    /**
    * The validate method (this is the one method that changes depending on the validation we need to do
    * so we set it as abstract)
    *
    * @return array
    */
//    abstract function validate();

    /**
    * Return errors
    *
    * @return array
    */
    public function errors()
    {
        return $this->errors;
    }
}

