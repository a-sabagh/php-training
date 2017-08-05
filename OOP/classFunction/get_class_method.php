<?php

class Person {

    public $id;
    public $fname;
    public $lname;

    /**
     * Person class destruction
     * @access public
     * @return null
     */
    function __construct($id, $fname, $lname) {
        $this->id = $id;
        $this->fname = $fname;
        $this->lname = $lname;
        echo "constructor is calling <br>";
    }

    function __destruct() {
        echo "destructor is calling <br>";
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
$classname = 'Person';
$classmethod = get_class_methods($classname);
print_r($classmethod);  