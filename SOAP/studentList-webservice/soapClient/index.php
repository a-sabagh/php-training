<?php 
require "client.php";
print_r($client->studentList());
?><hr><?php
print_r($client->getStudentName(2));
?><hr><?php