<?php

ob_start();
    echo '1';
    ob_start();
        echo '2';
        $x = ob_get_clean();
    echo '3';
    $y = ob_get_clean();
echo $x;
echo '<hr>';
echo $y;