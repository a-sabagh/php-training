<?php
/**
 * zlib.output_compression=Off;
 * ;output_buffering = 4096;
 * output_buffering = Off;
 */

ob_start();
echo "hello world<br>";
echo "it work<br>";
ob_end_flush();

echo 'hello';

ob_end_flush();