<?php
//()
echo preg_match("/(ha)/" , "halahal") . "<br>";      //1
echo preg_match("/(ha){2}/" , "haha") . "<br>";      //0
echo preg_match("/(ha)+/" , "hfasfafasf") . "<br>";  //0
echo preg_match("/(ha)?/" , "hfasfafasf") . "<br>";  //1
echo preg_match("/(ha)./" , "hfasfafhaasf") . "<br>";//1
echo "<hr>";
//\1
echo preg_match("/(step) by \\1/" , "step by step") . "<br>";          //1
echo preg_match("/(ab)\\1/" , "abab") . "<br>";                        //1
echo preg_match("/(a) by (bas) \\1 \\2/" , "a by bas a bas") . "<br>"; //0
echo preg_match("/(step) by \\1/" , "step by step") . "<br>";          //0
echo "<hr>";
