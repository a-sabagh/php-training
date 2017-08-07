<?php
//^
echo preg_match("/^[a-f]/" , "abf") . "<br>";  //1
echo preg_match("/^[a-f]/" , "htabf") . "<br>";//0
echo preg_match("/^[a-f]/" , "uabf") . "<br>"; //0
echo preg_match("/^a[b-z]+/" , "ay") . "<br>"; //1
echo preg_match("/^[a-f]/" , "dabf") . "<br>"; //1
echo "<hr>";
//$
echo preg_match("/[a-f]$/" , "abf") . "<br>";   //1
echo preg_match("/[a-f]$/" , "abfo") . "<br>";  //0
echo preg_match("/\.(png){0,3}$/" , "ali.png") . "<br>";  //1
echo preg_match("/\.(jpg){0,3}$/" , "ali.jpg") . "<br>";  //1
echo preg_match("/[a-f]+s$/" , "abfs") . "<br>";  //1
echo "<hr>";
//\b
echo preg_match("/s\b/" , "fascs") . "<br>";//1
echo preg_match("/c\b/" , "fasfd") . "<br>";//0
echo "<hr>";
//\B
echo preg_match("/a\B/" , "fassf") . "<br>";//1
echo preg_match("/a\B/" , "ffsda") . "<br>";//0
echo "<hr>";
