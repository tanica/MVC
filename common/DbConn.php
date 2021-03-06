<?php
/**
 * Description of DbConn
 * singleton pattern to connect to the db
 * @author tanyaatanasova
 */

class DbConn {
    static $instance = false;
    
    private function __construct() {}
    
    public function getInstance() { 
        if (!DbConn::$instance) {
            //this could be passed as parameters
            $dsn = 'mysql:dbname=MVC;host=127.0.0.1';
            $options = array(PDO::ATTR_AUTOCOMMIT => TRUE);
            try {
               DbConn::$instance = new PDO($dsn, "root", "", $options); 
            } catch (PDOException $e) {
               echo 'Connection failed: ' . $e->getMessage();
            }
        }
        return DbConn::$instance; 
    }
}
