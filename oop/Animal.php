<?php

class Animal {
    public $name;
    public $legs = 4;
    public $cold_blooded = "No";

    public function __construct($name)
    {
        $this->name = $name;
    }
}

?>