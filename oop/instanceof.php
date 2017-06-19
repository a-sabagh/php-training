<?php
class Cat{
    public function sound(){
        echo "miaw";
    }
}
class Dog{
    public function sound(){
        echo "arab";
    }
}

function whate_animal($instance){
    if($instance instanceof Cat){
        echo "instance of Cat<br>";
    }elseif($instance instanceof Dog){
        echo "instance of Dog<br>";
    }
}

$cat = new Cat();
$dog = new Dog();
whate_animal($cat);
whate_animal($dog);
