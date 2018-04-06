<?php

//hashing
echo "<br>========= md5 - length:32 ============<br>";
echo md5("reza darroodi")."<br>";//826c26fcf2605c907219773178c751c7
echo md5("Reza darroodi")."<br>";//7d9176da368f0f97176a29842bdd326d
echo md5("r")."<br>";            //4b43b0aee35624cd95b910189b3dc231
echo md5("hello.my name is Reza darroodi. I am a php Teacher.and this is a test for md5 hashing")."<br>";

echo "<br>========= sha1 - length:40 ============<br>";
echo sha1("reza darroodi")."<br>";
echo sha1("r")."<br>";
echo sha1("hello.my name is Reza darroodi. I am a php Teacher.and this is a test for md5 hashing")."<br>";


echo "<br>========= sha256 - length: 64 ============<br>";
echo hash("sha256","reza darroodi")."<br>";
echo hash("sha256","r")."<br>";
echo hash("sha256","hello.my name is Reza darroodi. I am a php Teacher.and this is a test for md5 hashing")."<br>";

echo "<br>========= sha512 - length: 128 ============<br>";
echo hash("sha512","reza darroodi")."<br>";
echo hash("sha512","r")."<br>";
echo hash("sha512","hello.my name is Reza darroodi. I am a php Teacher.and this is a test for md5 hashing")."<br>";


#########################################################################################

echo "<br>========= bad password ============<br>";
echo md5("reza1234")."<br>";
echo sha1("aliali123")."<br>";

echo "<br>========= good password ============<br>";
echo md5("@liALI_123")."<br>";


#########################################################################################
echo "<br>========= salt ============<br>";
$pass = md5("aliali123");
echo $pass."<br>";
$salt = "_#f@b1Bt43";
$secure_pass = md5("aliali123". $salt);
echo $secure_pass."<br>";

