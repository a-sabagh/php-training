<?php

class myException extends Exception {

    public function myMessage() {
        echo '<span style="color:orangered;">' . $this->message . '</span><br>';
    }

}

function inverse($x) {
    if ($x == 0) {
        $message = "ziro is exception in this function";
        throw new myException($message);
    }
    return 1 / $x;
}

if (isset($_GET['x'])) {
    try {
        echo inverse($_GET['x']) . "<br>";
    } catch (myException $ex) {
        $ex->myMessage();
    }  finally {
        echo "We using try catch finally for executing this function<br>";
    }
}
