<?php

class Book {
    public $title;
    public $author;
    public $id;
    
    public function setId($id){
        $this->id = $id;
    }
    
    public function setTitle($title){
        $this->title = $title;
    }
    
    public function setAuthor($author){
        $this->author = $author;
    }
    
    public function getAuthor(){
        return $this->author;
    }
    
    public function getTitle(){
        return $this->title;
    }
    
    public function getId(){
        return $this->id;
    }
    
}

?>