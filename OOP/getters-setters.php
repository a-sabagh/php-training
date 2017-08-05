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
     * phone Person class attrebute getters
     * @access public
     * @return stringNumber
     */
    function getPhone() {
        return $this->phone;
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
     * phone Person class attrebute setters
     * you can filter attrebute content when using setters
     * @access public
     * @return stringNumberic
     */
    function setphone($phone) {
        if (is_numeric($phone)) {
            $this->phone = $phone;
        }
    }
    
    /**
     * mobile Person class attrebute setters
     * you can filter attrebute content when using setters
     * @access public
     * @return stringNumberic
     */
    function setMobile($mobile) {
        if (is_numeric($mobile)) {
            $this->mobile = $mobile;
        }
    }

    /**
     * Person class destruction
     * @return null
     */
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

$person1 = new Person(1, 'ala', 'sabagh', '05136223478', '09352345678'); //Person construct
echo $person1->getPhone() . '<br>';
$person1->setMobile('09361825145');
echo $person1->getMobile() . '<br>';
$person1->setMobile('09158073613reza');
echo $person1->getMobile() . '<br>';
