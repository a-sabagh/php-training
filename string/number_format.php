<?php
$number = 1234567;
echo number_format($number, 3, '،', '/');
echo "<hr>";
echo number_format($number);
echo "<hr>";
echo number_format($number, 0, '', '،');
echo "<hr>";
echo number_format($number, 1, '{}', '|');