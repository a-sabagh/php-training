<?php

class Person {

    public $id;
    public $fname;
    public $lname;
    protected $phone;
    private $mobile;

    function __construct($id, $fname, $lname, $phone, $mobile) {
        $this->id = $id;
        $this->fname = $fname;
        $this->lname = $lname;
        $this->phone = $phone;
        $this->mobile = $mobile;
        echo "constructor is calling <br>";
    }

    /**
     * Person class destruction
     * @return null
     */
    function __destruct() {
        echo "destructor is calling <br>";
    }

    /**
     * mobile Person class attrebute getters
     * @access public
     * @return stringNumberic
     */
    function getMobile() {
        return $this->mobile;
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
    protected function sleep() {
        echo 'sleeping <br>';
    }

}

