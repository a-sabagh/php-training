<?php
$string = "abcdefg";
echo substr($string, 0 , -1) . "<br>"; //abcdef
echo substr($string, 0 , -2) . "<br>"; //abcde
echo substr($string, 0 , -3) . "<br>"; //abcd
echo substr($string, 0 , -4) . "<br>"; //abc
echo substr($string, 0 , -5) . "<br>"; //ab
echo substr($string, 0 , -6) . "<hr>"; //a
//################################### 
echo substr($string, 0 , 1) . "<br>"; //a
echo substr($string, 0 , 2) . "<br>"; //ab
echo substr($string, 0 , 3) . "<br>"; //abc
echo substr($string, 0 , 4) . "<br>"; //abcd
echo substr($string, 0 , 5) . "<br>"; //abcde
echo substr($string, 0 , 6) . "<hr>"; //abcdef
//################################### 
echo substr($string, 0 , 2) . "<br>"; //ab
echo substr($string, 1 , 2) . "<br>"; //bc
echo substr($string, 2 , 2) . "<br>"; //cd
echo substr($string, 3 , 2) . "<br>"; //de
echo substr($string, 4 , 2) . "<br>"; //ef
echo substr($string, 5 , 2) . "<hr>"; //fg
//################################### 
echo substr($string, 1) , "<br>"; //bcdefg
echo substr($string, 2) , "<br>"; //cdefg
echo substr($string, 3) , "<br>"; //defg
echo substr($string, 4) , "<br>"; //efg
echo substr($string, 5) , "<br>"; //fg
echo substr($string, 6) , "<hr>"; //g
//################################### 
echo substr($string, -1) , "<br>"; //g
echo substr($string, -2) , "<br>"; //fg
echo substr($string, -3) , "<br>"; //efg
echo substr($string, -4) , "<br>"; //defg
echo substr($string, -5) , "<br>"; //cdefg
echo substr($string, -6) , "<br>"; //bcdefg
