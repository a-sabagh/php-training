<?php
function is_valid_prosenal_id($value){
    $pid = (string) $value;
    $length = strlen($pid);
    $pid = '00' . $pid;
    $pid = substr($pid,(strlen($pid) - 10),10);
    $pid_arr = str_split($pid);
    $control = end($pid_arr);
    for($i=0;$i<9;$i++){
        $number = (int) $pid_arr[$i];
        $multiple = abs($i - 10);
        $sum[] = $number*$multiple;
    }
    $calculate_control = array_sum($sum)%11;
    return  
        ($calculate_control < 2 && $calculate_control == $control) ||
        ($calculate_control >= 2 && $control == (11-$calculate_control));
}
