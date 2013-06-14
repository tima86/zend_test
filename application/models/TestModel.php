<?php
 
    require_once 'Zend/Db.php';
   
    
    

class Application_Model_TestModel
{
   
    public $db;
//    public $id;
//    public $name;
//    public $age;
//    public $type;
//    public $rate;
    
    
    public function __construct()
    {
      $params = array (      'host'     => '10.0.0.99',
                             'username' => 'user',
                             'password' => 'usbw',
                             'dbname'   => 'clients_zf');

      $this->db = Zend_Db::factory('PDO_MYSQL', $params);
      
        }

    
    
    public function hello()
    { 
        echo 'Hello World';
        
         
        }
        
 }
?>
