<?php

ob_start();
    echo '1';
    ob_start();
        echo '2';
        $x = ob_get_clean();
        $l_x = ob_get_level();
    echo '3';
    $y = ob_get_clean();
    $l_y = ob_get_level();
echo "x level: {$l_x} and x: {$x}";
echo '<hr>';
echo "y levele: {$l_y} and y: {$y}";