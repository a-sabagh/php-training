<?php 
echo "<h2>Create array With json:</h2>";
$jsn = <<<json
[{"id":13},{"id":14},{"id":15,"children":[{"id":16},{"id":17,"children":[{"id":18}]}]}]
json;
$array = json_decode($jsn,true);
echo "<pre>";
var_dump($array);
echo "</pre><hr>";
echo "<h2>Create stdObject With json:</h2>";
$object = json_decode($jsn);

echo "<pre>";
var_dump($object);
echo "</pre><hr>";
echo "<h2>access to element of array objec</h2>";
echo $object[0]->id . "<br>";
print_r($object[2]->children);