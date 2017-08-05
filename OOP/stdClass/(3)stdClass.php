<?php
$simple_array = array();
$assoc_array = array(
    'trance_music' => 'scooter',
    'traditional_music' => 'simabina',
    'baverage' => 'pepesi',
    'food' => 'pasta'
);
$stdClass_object = new stdClass();
foreach ($assoc_array as $key => $value) {
    $stdClass_object->$key = $value;
}
echo '<hr />';
print_r($stdClass_object);
echo "<hr />";
