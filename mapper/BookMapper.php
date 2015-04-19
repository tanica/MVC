<?php

/**
 * Description of BookMapper
 *
 * @author tanyaatanasova
 */

include_once("model/Book.php");
class BookMapper {
    protected $conn;
    protected $map = array();
    
    public function __construct($conn) {
        $this->conn = $conn; 
        //we could do better, for example get the field structure from the mysql table 
        $arr = simplexml_load_file('configs/book.xml');
        //map the fields
        foreach($arr as $field) {
            $this->map[(string)$field->name] = $field; 
        }
    }
    
    public  function getBookList(){
       $page = $this->conn->prepare("SELECT * FROM books");
       $page->execute();
       $booklist = array();
       $rows = $page->fetchAll(PDO::FETCH_ASSOC);
       foreach($rows as $row){
            $booklist[] = $this->createBookFromRow($row);
       }
       return $booklist;
    }
    public  function save(){}
    public  function view(){}
    
    
    protected function createBookFromRow($row) { 
        $book = new Book($this); 
        foreach($this->map as $field) {
            $value = $row[(string)$field->name]; 
            $setProp = "set".ucfirst((string)$field->name);
            if ($value && $setProp) {
              call_user_func(array($book, $setProp), $value); 
            }
        }
        return $book; 

    }
    
}
