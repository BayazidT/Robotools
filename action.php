
<?php
 include "include/header.php";
	  
 $db=new Database();
 $pd = new Product();
 
if(!isset($_GET['id'])|| $_GET['id']==NULL){
	echo "<script>window.location = index.php;</script>";
}else{
  $pid= preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['id']) ;

}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$quantity = $_POST['quantity'];
	if($quantity<=0){
		?>
		<script> alert("You have to select anyquantity! Thanks");</script>
	  <?php

	}else{
	  $addCart = $ct->addToCart($pid, $quantity);

	}

  

}