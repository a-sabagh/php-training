<?php 
$person = new stdClass();
$person->name = 'abolfazl';
$person->nic_name = 'papillon';
$person->job = 'computer_man';
$person->lvoe = 'dont ask me about this is secret';
print_r($person);
echo "<br />";
class car{}
$benz = new car();
$benz->wheel = 4;
$benz->door = 2;
$benz->model = 'c400';
print_r($benz);
echo "<br />";
$bus = array(
    'wheel' => 4,
    'door' => 5,
    'model' => 'volvo1998'
);
print_r($bus);
//call all of that : 
echo "<br />";
echo $person->name;
echo "<br />";
echo $benz->model;
echo "<br />";
echo $bus['model'];
echo "<br />";
//call by foreach
foreach ($person as $value){
    echo $value . ' , ';
}
echo "<br />";