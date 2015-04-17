<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include 'model/Photo.php';
class PhotoController{
    
    public  $model;
    public function __construct()  
    {  
        $this->model = new Model();

    } 
    
    public function index(){
        print 'index';exit;
    }
}
