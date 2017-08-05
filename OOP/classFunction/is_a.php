<?php
class Person{
    
}
$class_name = 'Person';
$person1 = new Person;
if(is_a($person1, $class_name)){
    echo 'person1 is_a Person';
}else{
    echo 'person1 not_a Person';
}