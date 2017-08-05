<?php
/**
 * interface implement
 * you can not declare protected method in interface class
 */
interface Car{
   public function start($carname);
}
/**
 * you must declare all method in interface element
 */
class Cadilac implements Car{
    public function start($carname){
        echo "{$carname} is start";
    }
}
