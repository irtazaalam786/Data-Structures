<?php
class Node {
    public $data;
    public $next;
    public $previous;

    public function __construct() {
        $this->next=null;
    }
}

?>