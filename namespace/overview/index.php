<?php

function myfunction(){ echo "without namespace<br>"; }
myfunction();
require_once "gnt-namespace.php";
require_once "rng-namespace.php";

\gnt\myfunction();