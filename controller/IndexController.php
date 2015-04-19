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

include_once("common/DbConn.php");
include_once("mapper/BookMapper.php");

class IndexController {
    //put your code here
    
    public $bookMapper;
    
    public function __construct()  
    {  
        $db = & DbConn::getInstance();
        $bookMapper = new BookMapper($db);
        $this->bookMapper = $bookMapper;
    } 
    
    public function index(){
        $booklist =  $this->bookMapper->getBookList();
        include 'view/booklist.php';
    }
}
