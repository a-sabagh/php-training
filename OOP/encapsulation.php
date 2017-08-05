<?php

class car {

    private $engin;
    private $spark;
    public $key;

    /**
     * starting car with key
     * @access public
     * @param int $key
     */
    public function __construct($engin , $spark , $key) {
        $this->engin = $engin;
        $this->spark = $spark;
        $this->key = $key;
    }
    public function start($key) {
        if ($this->key == $key) {
            $this->turn_on($this->engin , $this->spark);
        }
    }
    /**
     * spark pluged
     * @access private
     * @param type $spark
     */
    private function spark_pluged($spark){
        echo 'car is on <br>';
    }
    /**
     * engin on
     * @access private
     * @param type $engin
     */
    private function engin_on($engin){
        //engin on
    }
    /**
     * turn_on car
     * @access private
     */    
    private function turn_on($engin , $spark){
        $this->spark_pluged($spark);
        $this->engin_on($engin);
    }
}

$pride = new car('engin', 'spark', 1);
$pride->start(1);
