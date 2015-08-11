<?php
//will find the smallest angle between the hour and minute hands on an analog clock
    class ClockAngle
    {
        function angleBetweenClockHands($time)
        {
            if ($time == 12) {
                return 0 . " Degrees";
            } elseif ($time >= 1 && $time <= 6) {
                $degrees = $time * 30;
                return $degrees . " Degrees";
            } elseif ($time > 6 && $time < 12) {
                $degrees = 360 - ($time * 30);
                return $degrees . " Degrees";
            }
        }
    }

 ?>
