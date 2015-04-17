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

include_once('model/Graph.php');
class GraphController {
    public  $model;
    public function __construct() {
        $graph = array(
         'A' => array('B', 'F'),
         'B' => array('A', 'D', 'E'),
         'C' => array('F'),
         'D' => array('B', 'E'),
         'E' => array('B', 'D', 'F'),
         'F' => array('A', 'E', 'C'),
        );
        
        $this->model = new Graph($graph);
    }

    
    public  function index(){
       
       $path = $this->model->breadthFirstSearch('D', 'C');
        
    }
}
