<?php

include('circular_linked_list.php');

class CircularLinkedList{
    private $first=null;
    private $last=null;

    function insert_first($data){
        $new_node = new Node();
        $new_node->data = $data;

        if($this->first == null){
            $this->first = $new_node;
            $this->last = $new_node;
        }else{
            $new_node->next = $this->first;
            $this->first=$new_node;
            $this->last->next = $this->first;
        }
    }

    function insert_last($data){
        $new_node = new Node();
        $new_node->data = $data;

        if($this->first == null){
            $this->first = $new_node;
            $this->last = $new_node;
        }else{
            $this->last->next = $new_node;
            $new_node->next = $this->first;
            $this->last = $new_node;
        }
    }

    function delete_first(){
        $temp = $this->first->data;
        $this->first = $this->first->next;
        $this->last->next = $this->first;
        return $temp;
    }

    function delete_last(){
        $temp = $this->last->data;
        $current = $this->first;
        while($current->next != $this->last){
            $current = $current->next;
        }
        $this->last = $current;
        $this->last->next = $this->first;
        return $temp;
    }

    function display(){
        $current = $this->first;
        do{
            echo $current->data.'<br>';
            $current = $current->next;
        }while($current != $this->first);
    }
}

$circular = new CircularLinkedList();
$circular->insert_first(10);
$circular->insert_first(20);
$circular->insert_first(30);
// $circular->insert_last(40);
// $circular->insert_last(50);
// $circular->insert_last(60);
// $circular->insert_first(70);
// $circular->delete_first();
// $circular->delete_last();
// $circular->delete_last();

?>