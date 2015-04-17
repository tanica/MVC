<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Photo
 *
 * @author tanyaatanasova
 */
class Photo {   
    public function  getList(){
        return array('1' => 'photo1','2' => 'photo2');
    }
    public function getPhoto(){
       $list =  $this->getList();
       return $list[0];
    }
}
