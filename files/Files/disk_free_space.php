<?php
$directory = '/';
echo disk_free_space($directory) . ' byte <br>';
echo disk_free_space($directory)/1024 . ' kilobyte <br>';
echo disk_free_space($directory)/(1024*1024) . ' megabyte <br>';
echo disk_free_space($directory)/(1024*1024*1024) . ' gigabyte <br>';