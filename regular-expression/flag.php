<?php
//i = case insensitive
echo preg_match("/A/i" , "a") . "<br>";
echo preg_match("/A/" , "a") . "<br>";
echo "<hr>";
//m = multiline
$string = "bar.ba@test.co.uk
www.demo.com	http://foo.co.uk/";
echo preg_match("/^[\w\d.-_]+@[\w\d\._\-]+\.[\w\.]{2,6}$/m" , $string) . "<br>";
echo preg_match("/^[\w\d.-_]+@[\w\d\._\-]+\.[\w\.]{2,6}$/" , $string) . "<br>";
echo "<hr>";