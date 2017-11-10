<?php

function inverse($x) {
    if ($x == 0) {
        $message = "ziro is exception in this function";
        //Exception($message, $code, $previous);
        throw new Exception($message);
    }
    return 1 / $x;
}

if (isset($_GET['x'])) {
    try {
        echo inverse($_GET['x']);
    } catch (Exception $ex) {
        echo $e->getMessage();
    }
}
