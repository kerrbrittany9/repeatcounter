
<?php

    require_once "src/RepeatCounter.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {

        function testRepeatCounterMachine()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $input1 = "a";
            $input2= "";

            //Act
            $result = $test_RepeatCounter->repeatCounterMachine($input1, $input2);

            //Assert
            $this->assertEquals(1, $result);
        }
    }

?>