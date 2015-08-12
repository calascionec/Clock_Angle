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

        function test_clockAngle130()
        {
            $test_ClockAngleTest = new ClockAngle;
            $input = "1:30";

            $result = $test_ClockAngleTest->angleBetweenClockHands($input);

            $this->assertEquals("135 Degrees", $result);
        }

        function test_clockAngle315()
        {
            $test_ClockAngleTest = new ClockAngle;
            $input = "3:15";

            $result = $test_ClockAngleTest->angleBetweenClockHands($input);

            $this->assertEquals("7.5 Degrees", $result);
        }

        function test_clockAngle320()
        {
            $test_ClockAngleTest = new ClockAngle;
            $input = "3:20";

            $result = $test_ClockAngleTest->angleBetweenClockHands($input);

            $this->assertEquals("20 Degrees", $result);
        }

        function test_clockAngle350()
        {
            $test_ClockAngleTest = new ClockAngle;
            $input = "3:50";

            $result = $test_ClockAngleTest->angleBetweenClockHands($input);

            $this->assertEquals("175 Degrees", $result);
        }

        function test_clockAngle859()
        {
            $test_ClockAngleTest = new ClockAngle;
            $input = "8:59";

            $result = $test_ClockAngleTest->angleBetweenClockHands($input);

            $this->assertEquals("84.5 Degrees", $result);
        }

        function test_clockAngle959()
        {
            $test_ClockAngleTest = new ClockAngle;
            $input = "9:59";

            $result = $test_ClockAngleTest->angleBetweenClockHands($input);

            $this->assertEquals("54.5 Degrees", $result);
        }

        function test_clockAngle1059()
        {
            $test_ClockAngleTest = new ClockAngle;
            $input = "10:59";

            $result = $test_ClockAngleTest->angleBetweenClockHands($input);

            $this->assertEquals("24.5 Degrees", $result);
        }

        function test_clockAngle1130()
        {
            $test_ClockAngleTest = new ClockAngle;
            $input = "11:30";

            $result = $test_ClockAngleTest->angleBetweenClockHands($input);

            $this->assertEquals("165 Degrees", $result);
        }

        function test_clockAngle1159()
        {
            $test_ClockAngleTest = new ClockAngle;
            $input = "11:59";

            $result = $test_ClockAngleTest->angleBetweenClockHands($input);

            $this->assertEquals("5.5 Degrees", $result);
        }

        function test_clockAngle101()
        {
            $test_ClockAngleTest = new ClockAngle;
            $input = "1:01";

            $result = $test_ClockAngleTest->angleBetweenClockHands($input);

            $this->assertEquals("24.5 Degrees", $result);
        }
    }

 ?>
