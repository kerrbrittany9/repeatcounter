
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

        function testRepeatCounterMachineWord()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $input1 = "think";
            $input2 = "think";

            //Act
            $result = $test_RepeatCounter->repeatCounterMachine($input1, $input2);

            //Assert
            $this->assertEquals(1, $result);
        }

        function testRepeatCounterMachineWordList()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $input1 = "red";
            $input2 = "blue, red, pink, edr, ed, red";

            //Act
            $result = $test_RepeatCounter->repeatCounterMachine($input1, $input2);

            //Assert
            $this->assertEquals(2, $result);
        }
        function testRepeatCounterMachineSentence()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $input1 = "people";
            $input2 = "I've learned that people will forget what you said, people will forget what you did, but people will never forget how you made them feel";

            //Act
            $result = $test_RepeatCounter->repeatCounterMachine($input1, $input2);

            //Assert
            $this->assertEquals(3, $result);
        }
        function testRepeatCounterMachineValidate()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $input1 = "Over";
            $input2 = "Red rover, red rover will Sally come over here.";

            //Act
            $result = $test_RepeatCounter->repeatCounterMachine($input1, $input2);

            //Assert
            $this->assertEquals(1, $result);
        }

    }

?>
