<?php

use csullivan\validator\validator;

require_once __DIR__.'/../vendor/autoload.php';

echo "validator test invoked"; 
class TestValidator {

	//$test_data = "invalid_email@.com";

    public function test_validator(){
         $validator = new validator();
//         $this->assertEquals($helloWord->say(), 'Hello Word', "Correct results");
    }
}

$test = new TestValidator;

?>

