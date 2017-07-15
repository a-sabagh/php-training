<?php
$filename = ini_get("error_log");
$content = file_get_contents($filename);
echo "<pre> $content </pre>";