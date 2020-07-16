<?php
include "lib/session.php";
session::init();
include "config/config.php" ;
include "lib/database.php" ;
include "helper/formate.php" ;

spl_autoload_register(function($class){
	include_once "classes/".$class.".php";
});

  $db = new Database();
  $fm = new formate();
  $pd = new Product();
  $ct = new Cart();

  $shefa=session_id();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>RoboToolsBD</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="CSS/bootstrap.min.css">
  <link rel="stylesheet" href="CSS/style.css">
  <script src="JS/jquery.min.js"></script>
  <script src="JS/popper.min.js"></script>
  <script src="JS/bootstrap.min.js"></script>
  
</head>
<body onload="startTime(), image()">
		
	<div class="topmost">
		<div class="topmenu">
			<div style="margin-left: 80px;">
			<a href="login.php"><img src="icons/login.png">Login</a>
			<a href="login.php"><img src="icons/register.png">Register</a>
			<a href="login.php"><img src="icons/profile.jpg">My Account</a>
		</div>
		</div>
		<div class="row">
		<div class="logo col-sm-4" style="margin:10px;">
				<img src="image/Logo.jpg" style="width:169px;height:69px; border-radius:2px;">

		</div>
		<div class="cartdetails col-sm-7 ">
				<a href="cartdetails.php">
		<div class="cartinfo">
				<img src="icons/cart.jpg">
				<?php 
				$count=0;
					$query="SELECT * FROM productlist p, cartlist c where c.sid='$shefa' AND p.pid=c.pid";
					$cart=$db->select($query);
					if($cart){
						while($cartlist=$cart->fetch_assoc()){
							$count++;
							
							
						}
						?>
							<p>View Cart(<?php echo $count; ?>)</p>

							<?php
					}
				?>
			
		</div></a>
		</div>
		
	</div>
		</div>
	
	<div class="navstyle sticky-top">
		<nav  class="navbar navbar-expand-sm " style="margin:0 auto;" >
			<a class="navbar-brand" href="index.php">
			<img src="image/home.jpg" style="height:44px;width:65px;border-radius:5px;">
			</a>
			<button class="navbar-toggler " style="border:1px solid green;color:green;"type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
			  <span class="large material-icons" >menu</span>
			</button>
			<div class="collapse navbar-collapse" id="collapsibleNavbar">
			  <ul class="navbar-nav">
			  <li class="nav-item">
				  <a class="nav-link" href="index.php">LATEST</a>
				</li>
				<li class="nav-item">
				  <a class="nav-link" href="index.php">OFFERS</a>
				</li>
				<li class="nav-item">
				  <a class="nav-link" href="index.php">COMPAIR</a>
				</li>
				
			  <li class="nav-item">
				  <a class="nav-link" href="index.php">TUTORIALS</a>
				</li>
				<li class="nav-item">
				  <a class="nav-link" href="cartdetails.php">CART</a>
				</li>
				<li class="nav-item">
				  <a class="nav-link" href="cartdetails.php">BLOG</a>
				</li>
			  
			  
			  <li style="margin: 2px; margin-top: 6px;">
					<form   class="form-inline" action="/action_page.php">
						<input class="form-control mr-sm-2" type="text" placeholder="Search">
						<button class="btn btn-success" type="submit">Search</button>
					  </form>	
			  </li>
			  </ul>
			  
			</div>  
		  </nav>
</div>