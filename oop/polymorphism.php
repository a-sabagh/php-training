<?php

class Animal {

    public function sound() {
        echo "animal sound<br>";
    }

}

class Cat extends Animal {

    public function sound() {
        echo "miaw<br>";
    }

}

class Dog extends Animal{
    public function sound() {
        echo "arab<br>";
    }
}

$Animal1 = new Cat();
$Animal1->sound();