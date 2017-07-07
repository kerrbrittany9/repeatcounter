
<?php

    require_once "src/RepeatCounter.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {

        function testRepeatCounterMachine()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $input1 = "a";
            $input2= "a";

            //Act
            $result = $test_RepeatCounter->repeatCounterMachine($input1, $input2);

            //Assert
            $this->assertEquals(1, $result);
        }

        function testRepeatCounterMachineString()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $input1 = "k";
            $input2= "k, l, m";

            //Act
            $result = $test_RepeatCounter->repeatCounterMachine($input1, $input2);

            //Assert
            $this->assertEquals(1, $result);
        }
    }

?>
