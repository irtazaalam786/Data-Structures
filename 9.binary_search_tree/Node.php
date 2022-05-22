<?php

class Node{
    public $key;
    public $value;
    public $left,$right;

    public function __construct($key,$value)
    {
        $this->key = $key;
        $this->value = $value;   
    }
}



?>