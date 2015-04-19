<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once("controller/IndexController.php");
include_once("common/DbConn.php");
$controller = new IndexController();
$controller->index();

$db = & DbConn::getInstance();

print_r($db);