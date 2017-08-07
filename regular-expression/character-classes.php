<?php
//[\s\S]
echo preg_match("/[\s\S]/" , "fsadfas(&*(&)fsdf{}") . "<br>";//1
echo preg_match("/[\s\S]/" , "4123412") . "<br>";//1
echo "<hr>";
//\w = [A-Za-z0-9_]
echo preg_match("/\w/" , "fsadfas(&*(&)fsdf{}") . "<br>";//1
echo preg_match("/\w/" , "4123412") . "<br>";//1
echo "<hr>";
//\W = [^A-Za-z0-9_]
echo preg_match("/\W/" , "fafas98098") . "<br>";//0
echo preg_match("/\W/" , "#$%^&*(") . "<br>";//1
echo preg_match("/\W/" , "#sadf%^&f888asdff*(") . "<br>";//1
echo "<hr>";
//\d = [0-9]
echo preg_match("/\d/" , "12345") . "<br>";//1
echo preg_match("/\d{5,9}/" , "345") . "<br>";//0
echo "<hr>";
//\D = [^0-9]
echo preg_match("/\D/" , "12345") . "<br>";//0
echo "<hr>";
//\s = white space
echo preg_match("/\s/" , "fa dfa fd") . "<br>";//1
echo preg_match("/\s/" , "fadfasdf") . "<br>";//0
echo "<hr>";
//\S = not white space
echo preg_match("/\S/" , "   ") . "<br>";//0
echo preg_match("/\S/" , "fadfasdf") . "<br>";//1
echo preg_match("/\S/" , "fa dfa sdf") . "<br>";//1
