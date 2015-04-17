<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Graph
 *
 * @author tanyaatanasova
 */
class Graph {
   
  protected $graph;
  protected $visited = array();
    
  public function __construct($graph) {
        $this->graph = $graph;
  }
  //find the least number of hops between two nodes 
  public function breadthFirstSearch($origin, $destination) {
      //mark all the nodes and unvisited
      
      
      foreach ($this->graph as $vertex => $adj) {
        $this->visited[$vertex] = false;
     }
     
    $q = new SplQueue();
    $q->enqueue($origin);
    $this->visited[$origin] = true;
     
    $path = array();
    $path[$origin] = new SplDoublyLinkedList();
    $path[$origin]->setIteratorMode(
        SplDoublyLinkedList::IT_MODE_FIFO|SplDoublyLinkedList::IT_MODE_KEEP
    );
    
    $path[$origin]->push($origin);
    $found = false;
    while (!$q->isEmpty() && $q->bottom() != $destination){
      $t = $q->dequeue();
      //if the node has some edges
      if (!empty($this->graph[$t])) {
          foreach ($this->graph[$t] as $vertex) {
            if (!$this->visited[$vertex]) {
               $q->enqueue($vertex);
               $this->visited[$vertex] = true;
               $path[$vertex] = clone $path[$t];
               
               $path[$vertex]->push($vertex);
            }
         }
      }
    }
   if (isset($path[$destination])) {
      echo "$origin to $destination in ", 
        count($path[$destination]) - 1,
        " hopsn";
      $sep = '';
      foreach ($path[$destination] as $vertex) {
        echo $sep, $vertex;
        $sep = '->';
      }
    }
    else {
      echo "No route from $origin to $destinationn";
    }
    print "<br><br>";
    //print_r($path);exit;
  }
  
  
}
