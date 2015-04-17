<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Model
 *
 * @author tanyaatanasova
 */
include_once("model/Book.php");

class Model {
	public function getBookList()
	{
		
// here goes some hardcoded values to simulate the database
		return array(
			"Jungle Book" => new Book("Jungle Book", "R. Kipling", "A classic book."),
			"Moonwalker" => new Book("Moonwalker", "J. Walker", ""),
			"PHP for Dummies" => new Book("PHP for Dummies", "Some Smart Guy", "")
		);
	}
	
	public function getBook($title)
	{
		// we use the previous function to get all the books and then we return the requested one.
		// in a real life scenario this will be done through a db select command
		$allBooks = $this->getBookList();
		return $allBooks[$title];
	}
	
	
}