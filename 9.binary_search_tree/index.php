<?php

include('Node.php');

class BinarySearchTree{

    public $root=null;
    
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
                        return;
                    }
                }else if($key > $current->key){
                    $current = $current->right;
                    if($current == null){
                        $parent->right = $new_node;
                        return;
                    }
                }
            }
        }


    }

    public function findMin(){
        $current = $this->root;
        $last = null;

        while($current !=null){
            $last = $current;
            $current = $current->left;
        }

        return $last->key;
    }

    public function findMax(){
        $current = $this->root;
        $last = null;

        while($current !=null){
            $last = $current;
            $current = $current->right;
        }

        return $last->key;
    }

    public function printTree($root){
        if(is_null($root)){
            return;
        }
        $this->printTree($root->right);
        echo $root->key;
        $this->printTree($root->left);
    }

    public function remove($key){
        $current_node = $this->root;
        $parent_node = $this->root;
        $is_left_child = false;

        //Searching

        while($current_node->key !=$key){
           $parent_node = $current_node;
           if($key < $current_node->key){
               $is_left_child=true;
               $current_node = $current_node->left;
           }else{
               $is_left_child=false;
               $current_node = $current_node->right;
           }            
        }

        $node_to_delete = $current_node;

        // if is a leaf node

        if($node_to_delete->left == null && $node_to_delete->right == null){
            if($node_to_delete == $this->root){
               $this->root == null;
            }else if($is_left_child){
                $parent_node->left = null;
            }else{
                $parent_node->right = null;
            }
        }
        else if($node_to_delete->right == null){
            if($node_to_delete == $this->root){
                $this->root = $node_to_delete->left;
            }else if($is_left_child){
                $parent_node->left = $node_to_delete->left;
            }else{
                $parent_node->right = $node_to_delete->left;
            }
        }else if($node_to_delete->left == null){
            if($node_to_delete == $this->root){
                $this->root = $node_to_delete->right;
            }else if($is_left_child){
                $parent_node->left = $node_to_delete->right;
            }else{
                $parent_node->right = $node_to_delete->right;
            }
        }


    }
}

$bst = new BinarySearchTree();
$bst->insert(10,'hello');
$bst->insert(20,'hello1');
$bst->insert(30,'hello2');
$bst->remove(10);
// echo $bst->findMin();
// echo $bst->findMax();
$bst->printTree($bst->root);

?>