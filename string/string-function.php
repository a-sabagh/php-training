<html>
    <head>
        <title>String_function</title>
        <style>b{color: orangered;font-size: 17px;font-family: consolas,"courier new",monospace; color: orangered;}</style>
    </head>
    <body>
    <?php
    $string_name = "code is poem";
    echo "The real string is : " . $string_name . "<hr>";
    echo "Now we out put of some php_function_string: <br>";
    echo "the out put of <b>strlen</b> function is : " . strlen($string_name) . "<br>";
    echo "the out put of <b>str_word_count</b>: " . str_word_count($string_name) . "<br>";
    echo "the out put of <b>strrev</b>: " . strrev($string_name) . "<br>";
    echo "the output of <b>strpos </b> is: " . strpos($string_name, "poem") . "<br>";
    echo "the output of <b>str_replace</b> is: " . str_replace("code" , "loev" , $string_name) . "<br>";
    echo "the output of <b>addcslashes</b> is: " . addcslashes($string_name, "p") . "<br>";
    echo "the output of <b>addcslashes</b> with other param is: " . addcslashes($string_name, "a..z") . "<br>";
    echo "the output of <b>addslashes</b> is: " . addslashes('code is "poem') . "<br>";
    echo "the <b>explode</b> function breaks a word of string into an array: ";print_r(explode($string_name));echo '<br />';
    echo "the <b>implode</b> function is give array as word and make output is statement: " . implode(" ",array(" ",'code','is','poem')) . "<br>";
    echo "the <b>join</b> function return string from the elements of array like implode function: " . join(" ", array('code' , 'is' , 'poem')) . "<br>";
    echo "the <b>ucfirst</b> function is make first letter of word or string uppercase: " . ucfirst($string_name) . "<br>";
    echo "the <b>lcfirst</b> function is make first letter of word or string lowercase: " . lcfirst($string_name) . "<br>";
    echo "the <b>ucword</b> function is make first letter of word of string is uppercase: " . ucwords($string_name) . "<br>";
    echo "the <b>ltrim</b> function is trime string from left side and where you want: " . ltrim($string_name , 'code') . "<br>";
    echo "the <b>rtrim</b> function is trime string frome right side and where you want: " . rtrim($string_name , 'poem') . "<br>";
    echo "the <b>md5</b> function is calculate the MD5 hash of string: " . md5($string_name) . "<br>";
    echo "the <b>ord</b> function is return the aski code of first character of string: " . ord($string_name) . "<br>";
    echo "the <b>print</b> function is same echo but when print the string that retutn 1 see this: "; print($string_name); echo "<br>";
    echo "the <b>sh1</b> function is calculate sh1 hash string: " . sha1($string_name) . "<br>";
    echo "the <b>similar_text</b> is calculate the similarity of tow string: " . similar_text("code is poem", "code is love") . "<br>";
    echo "with the <b>sscanf</b> string you can read variable from the string: " . sscanf($string_name, "%s is %s" , $code , $poem) . $code . $poem . "</br>";
    echo "the <b>str_ireplace</b> string you can replace word or group of characters with word in string: " . str_ireplace("poem" , "love" , $string_name) . "<br/>";
    echo "the str_ireplace function is for you when want replace insensitive word if you want to replace sentsitive key use <b>str_replace</b> function <br> ";
    echo "the <b>str_pad</b> function is for expand string with your desire word see this output function: " . str_pad($string_name, 20 , "~") . " notice that is calculate from first of string!<br>";
    echo "the output of <b>bin2hex</b> is: " . bin2hex($string_name) ."<hr>";
    //##########################################################################################################
    echo "<b>chop</b> function remove some special characters in php file see: <br> the output of string without this function is: code is poem\n <br>";
    echo "the output of string with this function is: " . chop("code is poem\n") . "<hr>";
    echo "the <b>nl2br</b> function is breake line if you use /n characters: " . nl2br("code is poem \n and i love codding every day") . "<hr>";
    echo "the <b>chr()</b> function param is ascii code and out put is string: " .  chr(046) ."<hr>" ;
    echo "the <b>chunk_split</b> function is splits a string into a series of smaller parts: " . chunk_split($string_name , 4 , "~") . "<hr>";
    echo "the <b>count_str</b> function is return all letter is use in the string: " . count_chars($string_name , 3) . "<hr>";
    echo "the <b>htmlentities</b> function is echo all special chars is availabel in key , see: " . htmlentities("!@#$%^&*()+|~<© W3Sçh°°¦§>") ."<hr>";
    echo "the <b>htmlspecialchars</b> function is ech html tag and recognize never tag and html tag as string see: ". htmlspecialchars("<i>never bold</i>") . "<br>";
    echo "the default way and without using htmlspecialchars function is : <i>bold</i> <hr>";
    echo "the <b>parse_str</b> function is parse a query string into the variable: " . parse_str("name= abolfazl &nicname= papillon &job= programmer ") . "<br>";
    echo 'the variable $name is:' . $name . 'and variable $nickname is: ' . $nicname . 'and the variable $lastname is: ' . $lastname . "<hr>" ;
    echo "the <b>printf</b> is echo formatted string: ";
    $name = "atiyeh";
    $age=21;
    printf("%s is my love and he is %u years old" , $name , $age);
   ?>
    </body>
</html>