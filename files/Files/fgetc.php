<?php

$filename = 'directory/data';
if (file_exists($filename)) {
    $handle = fopen($filename, "a+");
    $c = fgetc($handle);
    echo $c;
} else {
    echo 'file not exist';
}
echo '<hr>';
for ($i = 0; $i < 10; $i++) {
    $c = fgetc($handle);
    echo $c;
}
echo '<hr>';

fclose($handle);
