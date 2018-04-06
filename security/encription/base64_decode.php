<?php
$string = "abolfazlsabagh";
$base64 = base64_encode($string);
$string = base64_decode($base64);
echo "String(decode): " . $string ."<br>";
echo "base64(encode): " . $base64 ."<br>";
// string  -> encode -> base64 -> decode -> string