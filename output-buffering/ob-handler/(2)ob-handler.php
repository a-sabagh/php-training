<?php
function add_break_line($buffer){
    $search = ".";
    $replace = ".<br>";
    return str_replace($search, $replace, $buffer);
}
ob_start("add_break_line");
echo "hello i'm abolfazl. i'm programmer and i it not my work but it my love.";
ob_end_flush();
