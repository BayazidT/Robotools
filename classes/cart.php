<?php

    $filepath = realpath(dirname(__FILE__));
    include_once ($filepath."/../lib/database.php");
    include_once ($filepath."/../helper/formate.php");
    
   
    class Cart{
      
            private $db;
            private $fm;

            public function __construct(){
                $this->db= new Database();
                $this->fm = new Formate();

            }

        public function addToCart($pid, $quantity){
            $quantity = mysqli_real_escape_string($this->db->link, $quantity);
            $pid = mysqli_real_escape_string($this->db->link, $pid);
            $sid = session_id();
            $query = "INSERT INTO cartlist(pid, sid, quantity)values('$pid','$sid','$quantity')";
            $inserted = $this->db->insertcart($query);
           
          

        }
        public function getCartProduct($shefa){
            $queryCart= "SELECT * FROM productlist p, cartlist c where c.sid='$shefa' AND p.pid=c.pid";
            $totalCart=$this->db->select($queryCart);
            return $totalCart;
        }



    }


?>