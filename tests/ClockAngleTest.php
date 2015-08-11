<?php

    require_once "src/ClockAngle.php";

    class ClockAngleTest extends PHPUnit_Framework_TestCase
    {
        function test_clockAngle12()
        {
            $test_ClockAngleTest = new ClockAngle;
            $input = "12";

            $result = $test_ClockAngleTest->angleBetweenClockHands($input);

            $this->assertEquals("0 Degrees", $result);
        }
    }

 ?>
