<?php
//will find the smallest angle between the hour and minute hands on an analog clock
    class ClockAngle
    {
        function angleBetweenClockHands($time)
        {
            $time_array = explode(":", $time);
            $hours = $time_array[0];
            $minutes = $time_array[1];

            $hour_angle = ($hours * 30) + ($minutes * .5);
            $minute_angle = $minutes * 6;

            if (($hour_angle - $minute_angle) > 0 && ($hour_angle <= 180)) {
                return ($hour_angle - $minute_angle) . " Degrees";
            } elseif (($hour_angle - $minute_angle) > 0 && ($hour_angle > 180)){
                return (360 - ($hour_angle - $minute_angle) . " Degrees");
            } elseif (($hour_angle - $minute_angle) < 0 && ($hour_angle - $minute_angle)  > -180) {
                return ($minute_angle - $hour_angle) . " Degrees";
            } elseif (($hour_angle - $minute_angle) < 0 && ($hour_angle - $minute_angle)  < -180) {
                return (360 - ($minute_angle - $hour_angle)) . " Degrees";
            }

        }
    }

 ?>
