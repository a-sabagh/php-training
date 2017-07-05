<?php
function Censorship($buffer){
    $search = "fuck";
    $replace = "<span style='color: red;' >censored</span>";
    return str_replace($search, $replace, $buffer);
}
ob_start("Censorship");

echo "fuck you";

ob_flush();

