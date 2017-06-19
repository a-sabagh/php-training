<?php

class Person {

    public $id;
    public $fname;
    public $lname;
    protected $phone;

    /**
     * Person class destruction
     * @access public
     * @return null
     */
    function __construct($id, $fname, $lname) {
        $this->id = $id;
        $this->fname = $fname;
        $this->lname = $lname;
    }


    /**
     * Person class method walk
     * @access public
     * @return string return walking
     */
    public function walk() {
        echo 'walking <br>';
    }

    /**
     * Person class method sleep
     * @access public
     * @return string return sleeping
     */
    public function sleep() {
        echo 'sleeping <br>';
    }

}

$person1 = new Person(5, 'ali', 'alavi');

$serilize_object = serialize($person1);
$filename = "data";
file_put_contents($filename, $serilize_object);
$unserilize_object = unserialize(file_get_contents($filename));

echo $unserilize_object->fname;
