
<?php

    require_once "src/RepeatCounter.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {

        function repeatCounterMachine()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $input = "a";

            //Act
            $result = $test_RepeatCounter->repeatCounterMachine($input);

            //Assert
            $this->assertEquals("1", $result);
        }
    }

?>
