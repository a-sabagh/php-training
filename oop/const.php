<?php

final class People {

    public $id;
    public $fname;
    public $lname;
    public static $instance;
    const heart = 1;

     /**
     * Person class destruction
     * @access public
     * @return null
     */
    function __construct($id, $fname, $lname) {
        $this->id = $id;
        $this->fname = $fname;
        $this->lname = $lname;
        self::$instance++;
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
    public final function sleep() {
        echo 'sleeping <br>';
    }

}
$people1 = new People(1, 'ali', 'nikbakht');
echo 'static instance is: ' . People::$instance . '<br>';
echo 'constant heart is: ' . People::heart . '<br>';