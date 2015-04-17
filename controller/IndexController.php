<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Controller
 *
 * @author tanyaatanasova
 */

include_once("model/Model.php");
class IndexController {
    //put your code here
    public $model;
    
    public function __construct()  
    {  
        $this->model = new Model();

    } 
    
    public function index(){
	if (!isset($_GET['book'])){
            $books = $this->model->getBookList();
            include 'view/booklist.php';
	}
	else
	{
            $book = $this->model->getBook($_GET['book']);
            include 'view/viewbook.php';
	}
    }
}
