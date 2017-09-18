<?php 
$jsn = <<<json
[{"id":13},{"id":14},{"id":15,"children":[{"id":16},{"id":17,"children":[{"id":18}]}]}]
json;
$array = json_decode($jsn,true);
echo "<pre>";
var_dump($array);
echo "</pre><hr>";

$object = json_decode($jsn);

echo "<pre>";
var_dump($object);
echo "</pre><hr>";

echo $object[0]->id . "<hr>";
print_r($object[2]->children);