<?php

class Node {
    public $value;
    public $left;
    public $right;
	
    public function __construct($value)  
    {  
        $this->value = $value;
        $this->left = null;
        $this->right = null;
    } 
    
   public function dump() {
      
       if($this->left != null){
           $this->left->dump();
       }
       if($this->right != null){
           $this->right->dump();
       }
       var_dump($this->value);
   } 
    
}

?>