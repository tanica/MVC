<?php

class Tree {
    public $root;
    public $left;
    public $right;
	
    public function __construct() {
        $this->root = null;
    }
    
     public function isEmpty() {
        return $this->root === null;
    }
    
    public  function insert($item){
        
        $node = new Node($item);
        if($this->isEmpty()){
            $this->root = $item;
        }
        else{
            $this->insertNode($node,$this);
        }
        
    }
    
    public  function insertNode($node, &$subtree){
        
        if($subtree === null){
            $subtree = $node;
        }
        else{
            if($node->value > $subtree->value){
               $this->insertNode($node, $subtree->right);
            }
            if($node->value < $subtree->value){
               $this->insertNode($node, $subtree->left);
            }
            
        }
    }
    
   
    public function traverse() {
       if ($this->left !== null) {
            $this->left->dump();
        }
       // print $this->value;
       if ($this->right !== null) {
            $this->right->dump();
       }
    }
}

?>