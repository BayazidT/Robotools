<?php
    $filepath = realpath(dirname(__FILE__));
    include_once ($filepath."/../lib/database.php");
    include_once ($filepath."/../helper/formate.php");

    class Product{
      
            private $db;
            private $fm;

            public function __construct(){
                $this->db= new Database();
                $this->fm = new Formate();

            }

            public function getproduct($pid){
                $query = "SELECT * FROM productlist where pid='$pid'";
                $result = $this->db->select($query);
                return $result;
            }

        
    }


?>