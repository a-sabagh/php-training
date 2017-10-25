<?php
$hello = 'hello world';
$it = 'hello world';
function print_vars (){
    foreach($GLOBALS as $var_name => $value) {
        echo "<b>Variable Name: </b>" . $var_name;
        echo '<br>';
        echo "<b>Values: </b>";
        var_dump($value);
        echo '<hr>';
    }
}
//Variable Exist();
function variable_exist ($my_var){
    foreach($GLOBALS as $var_name => $value) {
        if($my_var === $value){
            echo 'variable exist';
            break;
        }
    }
}
print_vars ();
variable_exist($hello);