<?php 

class Person{
    
}
class Animal{
    
}
class Car{
    
}
class Address{
    
}
$all_classes = get_declared_classes();
foreach ($all_classes as $class){
    echo $class;
    echo "<br />";
}

