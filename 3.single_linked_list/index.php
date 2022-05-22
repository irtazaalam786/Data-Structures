<?php

include('single_linked_list.php');

class SingleLinkedList{
    private $first =null;
    private $prev_node = null;
    private $current_node = null;
    private $next_node = null;
    
    public function isEmpty(){
        return $this->first==null;
    }
    
    public function insertFirst($data){
        $new_node = new Node();
        $new_node->data=$data;
        $new_node->next=$this->first;
        $this->first = $new_node;
    }

    public function deleteFirst(){
        $temp = $this->first;
        $this->first = $this->first->next;
        return $temp;
    }

    public function insertLast($data){
        $new_node = new Node();
        $new_node->data = $data;
        $current = $this->first;
        while($current->next !=null){
            $current = $current->next;
        }
        $current->next = $new_node;
    }

    public function display(){
        $current = $this->first;
        while($current !=null){
            echo $current->data.'<br>';
            $current = $current->next;
        }
    }

    public function reverse(){
        $this->current_node = $this->next_node = $this->first;
        while($this->next_node !=null){
            $this->next_node = $this->next_node->next;
            $this->current_node->next = $this->prev_node;
            $this->prev_node = $this->current_node;
            $this->current_node = $this->next_node;
        }

        $this->first = $this->prev_node;
    }

}

$linked_list = new SingleLinkedList();
$linked_list->insertFirst(10);
$linked_list->insertFirst(20);
$linked_list->insertFirst(30);
// $linked_list->insertLast(40);
// $linked_list->insertLast(50);
// $linked_list->reverse();
$linked_list->display();

?>