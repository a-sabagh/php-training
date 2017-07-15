<?php
ob_start();
echo "hello world<br>";
echo "it work<br>";
ob_flush();

echo 'hello';

ob_flush();