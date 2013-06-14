<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
        
        $this->testMod = new Application_Model_TestModel();
    }

    public function indexAction()
    {
       //Zend_Debug::dump($sql = $this->testMod->db);exit();  
        
       $sql = $this->testMod->db->quoteInto(
            'SELECT * FROM `zf_users` WHERE 1'   
        );
        $result = $this->testMod->db->query($sql);

        // используется PDOStatement $result,
        // чтобы извлечь все строки результата в массив
        
        $this->view->rows = $result->fetchAll();
        
        
//        echo '<pre>';
//        print_r($rows);
//        echo '<br />';
//        echo '</pre>';
        //exit();
             
       $this->testMod->hello();
       
    }


}

