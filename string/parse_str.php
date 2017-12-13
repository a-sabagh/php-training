<?php
//parse string with variable value
$string = "first=value1&second=value2&third=value3";
parse_str($string,$output);

echo "<pre>";
var_dump($output);
echo "</pre>";

//parse string with variable and array values
$string_1 = "first=value&arr[]=foo+bar&arr[]=baz";
parse_str($string_1, $output_1);
echo "<pre>";
var_dump($output_1);
echo "</pre>";

