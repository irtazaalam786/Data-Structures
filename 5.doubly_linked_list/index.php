<?php

include('node.php');

class Double_Linked_List{

    private $first;
    private $last;

    public function isEmpty(){
        return $this->first==null;
    }

    public function insert_first($data){
        $new_node = new Node();
        $new_node->data = $data;

        if($this->isEmpty()){
            $this->last = $new_node;
        }else{
            $this->first->previous = $new_node;
        }

        $new_node->next = $this->first;
        $this->first = $new_node;
    }

    public function insert_last($data){
        $new_node = new Node();
        $new_node->data = $data;

        if($this->isEmpty()){
            $this->first = $new_node;
        }else{
            $this->last->next = $new_node;
            $new_node->previous = $this->last;
        }

        $this->last = $new_node;
    }

    public function delete_first(){
        $temp = $this->first;
        if($this->first == null){
            $this->last = null;
        }else{
            $this->first->next->previous = null;
        }

        $this->first = $this->first->next;
    }

    public function delete_last(){
        $temp = $this->last;
        if($this->last->previous == null){
            $this->first = null;
        }else{
            $this->last->previous->next = null;
        }

        $this->last = $this->last->previous;
    }

    public function display(){
        $current = $this->first;
        while($current !=null){
            echo $current->data.'<br>';
            $current = $current->next;
        }
    }
}

$double = new Double_Linked_List();
$double->insert_first(10);
$double->insert_first(20);
$double->insert_first(30);
$double->insert_last(40);
$double->delete_first();
$double->delete_last();
$double->display();

?>