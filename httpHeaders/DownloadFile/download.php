<?php
header("Content-Type: image/jpeg");
header("Content-Disposition: attachment; filename=ComputerCoffie.jpeg");
readfile("img.jpeg");