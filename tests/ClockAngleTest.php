<?php

    require_once "src/ClockAngle.php";

    class ClockAngleTest extends PHPUnit_Framework_TestCase
    {
        function test_clockAngle12()
        {
            $test_ClockAngleTest = new ClockAngle;
            $input = 12;

            $result = $test_ClockAngleTest->angleBetweenClockHands($input);

            $this->assertEquals("0 Degrees", $result);
        }

        function test_clockAngle1()
        {
            $test_ClockAngleTest = new ClockAngle;
            $input = 1;

            $result = $test_ClockAngleTest->angleBetweenClockHands($input);

            $this->assertEquals("30 Degrees", $result);
        }

        function test_clockAngle2()
        {
            $test_ClockAngleTest = new ClockAngle;
            $input = 2;

            $result = $test_ClockAngleTest->angleBetweenClockHands($input);

            $this->assertEquals("60 Degrees", $result);
        }

        function test_clockAngle3()
        {
            $test_ClockAngleTest = new ClockAngle;
            $input = 3;

            $result = $test_ClockAngleTest->angleBetweenClockHands($input);

            $this->assertEquals("90 Degrees", $result);
        }

        function test_clockAngle4()
        {
            $test_ClockAngleTest = new ClockAngle;
            $input = 4;

            $result = $test_ClockAngleTest->angleBetweenClockHands($input);

            $this->assertEquals("120 Degrees", $result);
        }

        function test_clockAngle5()
        {
            $test_ClockAngleTest = new ClockAngle;
            $input = 5;

            $result = $test_ClockAngleTest->angleBetweenClockHands($input);

            $this->assertEquals("150 Degrees", $result);
        }

        function test_clockAngle6()
        {
            $test_ClockAngleTest = new ClockAngle;
            $input = 6;

            $result = $test_ClockAngleTest->angleBetweenClockHands($input);

            $this->assertEquals("180 Degrees", $result);
        }

        function test_clockAngle7()
        {
            $test_ClockAngleTest = new ClockAngle;
            $input = 7;

            $result = $test_ClockAngleTest->angleBetweenClockHands($input);

            $this->assertEquals("150 Degrees", $result);
        }

        function test_clockAngle8()
        {
            $test_ClockAngleTest = new ClockAngle;
            $input = 8;

            $result = $test_ClockAngleTest->angleBetweenClockHands($input);

            $this->assertEquals("120 Degrees", $result);
        }

        function test_clockAngle9()
        {
            $test_ClockAngleTest = new ClockAngle;
            $input = 9;

            $result = $test_ClockAngleTest->angleBetweenClockHands($input);

            $this->assertEquals("90 Degrees", $result);
        }

        function test_clockAngle10()
        {
            $test_ClockAngleTest = new ClockAngle;
            $input = 10;

            $result = $test_ClockAngleTest->angleBetweenClockHands($input);

            $this->assertEquals("60 Degrees", $result);
        }

        function test_clockAngle11()
        {
            $test_ClockAngleTest = new ClockAngle;
            $input = 11;

            $result = $test_ClockAngleTest->angleBetweenClockHands($input);

            $this->assertEquals("30 Degrees", $result);
        }
    }

 ?>
