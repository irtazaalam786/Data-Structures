<?php

include('Node.php');

class BinarySearchTree{

    protected $root=null;
    
    public function insert($key,$value){
        $new_node = new Node($key,$value);

        if($this->root == null){
           $this->root = $new_node;
        }else{
            $current = $this->root;
            $parent = null;

            while(true){
                $parent = $current;
                if($key < $current->key){
                    $current = $current->left;
                    if($current == null){
                        $parent->left = $new_node;
                    }
                }else if($key > $current->key){
                    $current = $current->right;
                    if($current == null){
                        $parent->right = $new_node;
                    }
                }
            }
        }


    }
}

$bst = new BinarySearchTree();
$bst->insert(10,'hello');
// $bst->insert(20,'hello1');
// $bst->insert(30,'hello2');

?>