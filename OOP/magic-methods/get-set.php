<?php
class Foo
{
    public $values = array();

    public function __get($key)
    {
        return $this->values[$key];
    }
    public function __set($key, $value)
    {
        $this->values[$key] = $value;
    }
}

$foo = new Foo;
$foo->name = "Abolfazl";
$foo->famil = "Sabagh";
var_dump($foo);
echo PHP_EOL;
echo $foo->name;
echo PHP_EOL;
echo $foo->famil;
echo PHP_EOL;
