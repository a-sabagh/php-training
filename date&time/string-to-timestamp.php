<?php
$time_str = "2020/12/04";
$time_array = explode("/",$time_str);
$year = current($time_array);
$mount = next($time_array);
$day = next($time_array);
$timestamp = (int) mktime(12,0,0,$mount,$day,$year);
#mktime (HOUR , MINUTE, SECOND , MOUNT , DAY , YEAR)
