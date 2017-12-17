<?php 

$string = "is awesome";
$replacement = 'rng ';
echo substr_replace($string, $replacement, 0, 0);
echo "<br><hr><br>";
$string1 = 'abcdef-hijklm-opq-stuvwxyz';
echo substr_replace($string1, "<b>g</b>", 6, 1);
echo "<hr>";
echo substr_replace($string1, "<b>n</b>", 13, 1);
echo "<hr>";
echo substr_replace($string1, "<b>r</b>", 17, 1);