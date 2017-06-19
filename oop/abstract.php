<?php

abstract class Car {

    abstract protected function start($car_name);

    abstract protected function run();

    public function take_off(){
        echo "car is taking off";
    }
}
/**
 * all abstract method must be define
 * you can add parameter to function in child class but you must be define default value for this
 */

class Cadilac extends Car{
    public function start($carname , $seprator = '<br>'){
        echo "{$carname} cadilac is start {$seprator}";
    }
    public function run() {
        echo "cadilac is running";
    }
}
$cadi1 = new Cadilac();
$cadi1->start('sclidCadi', '<hr>');


