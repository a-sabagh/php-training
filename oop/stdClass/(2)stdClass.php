<?php 
$categories = array($categories[0] = new stdClass(),  $categories[1] = new stdClass(),  $categories[2] = new stdClass());
$cnt = 0;
while ($cnt < 3) {
    $categories[$cnt]->name = 'defult_name';
    $cnt++;
}
print_r($categories);
//Array ( [0] => stdClass Object ( [name] => defult_name ) [1] => stdClass Object ( [name] => defult_name ) [2] => stdClass Object ( [name] => defult_name ) ) 
