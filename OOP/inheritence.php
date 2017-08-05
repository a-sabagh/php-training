<?php

include_once 'visibility.php';

class Student extends Person {

    public $student_id;

    public function __construct($id, $fname, $lname, $phone, $mobile , $student_id) {
        parent::__construct($id, $fname, $lname, $phone, $mobile);
        $this->student_id = $student_id;
    }

    /**
     * getting lesson method 
     * you can define new method in child class
     * @access public
     * @return string getting lesson string
     */
    public function gettinglesson() {
        echo "getting lesson";
    }

    /**
     * echo phone protected method from prent
     * @access public
     * @return stringNumberic echo phone
     */
    public function show_phone() {
        echo $this->phone;
    }

    /**
     * use parent::walk function in Student Class
     * @access public
     * @return string ::parent string
     */
    public function walk() {
        parent::walk();
    }

    /**
     * define sleep in child class with new structure
     * @access public
     * @return string no sleep at classroom
     */
    public function sleep() {
        echo "do'nt sleep at classroom";
    }

}

$person1 = new Student(2, 'abolfazl', 'sabagh', '05136225678' , '09357685632' , '90154051');
echo $person1->student_id . '<br>';
echo $person1->getMobile() . '<br>';
