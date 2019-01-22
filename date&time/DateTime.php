<?php
$d1 = new DateTime("2015-01-02");
echo $d1->format("Y-d-m") . '<br>';
$d2 = new DateTime("2015-04-30");
print_r($d1->diff($d2));
echo '<br>';
//$d1->add(new DateInterval("P3M28D"));
$d2->sub(new DateInterval("P3M28D"));
echo $d1->format("Y-d-m") .'<br>';
print_r($d1->diff($d2));
