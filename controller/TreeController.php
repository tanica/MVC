<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of GraphController
 *
 * @author tanyaatanasova
 */

include_once('model/Tree.php');
include_once('model/Node.php');
class TreeController {
    public  $model;
    
    public function __construct() {
        $this->model = new Tree();
    }

    
    public  function index(){
      
      $this->model->insert(4);
      
      $this->model->insert(19);
      $this->model->insert(23);
      $this->model->insert(5);
      $this->model->insert(10);
      
      $this->model->traverse();
      // $path = $this->model->breadthFirstSearch('D', 'C');
        
    }
}
