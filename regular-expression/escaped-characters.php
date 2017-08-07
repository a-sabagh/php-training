<?php
//\t
echo preg_match("/[\d]+\t/" , "4567	") . "<br>";
echo preg_match("/[\w]+\t/" , "fasdf	") . "<br>";
echo preg_match("/[\d]+\t/" , "4567 ") . "<br>";
echo "<hr>";
//\n
echo preg_match("/[\d]+\n/" , "2468
") . "<br>";
echo preg_match("/[\d]+\n/" , "4567 ") . "<br>";
echo "<hr>";
