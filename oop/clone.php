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

$person1 = new Person(1, 'ala', 'sabagh'); //Person construct
$person2 = $person1;
echo $person1->fname . '<br>';
$person2->fname = 'zahra';
echo $person1->fname . '<br>';
$person1->fname = 'ala';
echo '<hr>';
$person2 = clone $person1;
$person2->fname = 'zahra';
echo $person1->fname . '<br>';
//Person destruct