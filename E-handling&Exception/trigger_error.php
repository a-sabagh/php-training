<?php
function minus($x,$y){
    if($x < $y){
        $error_msg = "first parameter must be grather than second";
        trigger_error($error_msg , E_USER_ERROR);
    }
    return $x - $y;
}
if(isset($_GET['x']) && isset($_GET['y'])){
    $x = $_GET['x'];
    $y = $_GET['y'];
    echo minus($x , $y);
}