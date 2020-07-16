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





?>
<div class="mainsection" style="background:#f1f1f1;">
    <div class="container" >
	
	<div class="row">
	<div style="width:850px;">
		<div class="row">
	<div class="col-sm-12" >
	<div class="card " style=" border-radius:10px;">
	<?php
	   
	   $getpid=$pd->getproduct($pid);
	   if($getpid)
		{
			while($result=$getpid->fetch_assoc()){

	?>
    <div class="card-body">
		<div class="d-flex justify-content-center">
		<img class="col-sm-5 "src="image/<?php echo $result['image']; ?>">
	</div>
		<hr>
		<div class="text-center description">

		<h5><?php echo $result['pname']; ?></h5>
		<h6><?php echo $result['pdescription']; ?></h6>
		
		<p><?php echo $result['pprice']; ?></p>
		
		<form method="POST" action="">
		<label>Quantity</label>
		<input type="number" min="1" step="1" style="width:40px;" id="check" name="quantity" value="1"/>
		<br/>
		<button type="submit" class="btn btn-secondary col-md-3" name="cart">Add to Cart</button>
		
				</form>
				
	</div>

		<div class="detailssection">
			<p>Total Pins 14</p>
			<p>Input Voltage Range 7 to 12 volt mostly.</p>
			<p>Has two types of out put voltage one is 3.3V another one is 5V</p>
			<p>Total Pins 14</p>
			<p>Total Pins 14</p>

		</div>
		
				   <div class="detailsvid">
					  
						<iframe src="https://www.youtube.com/watch?v=tL57j3Zbpvk"
						 frameborder="0" allowfullscreen></iframe>
						 <h4>Here is the tutorial for the begainner! </h4>
					
				   </div>
	</div>
	</div>
	</div>
	
	
						<?php
						}
		}
		?>	
					
	
	
		
	</div>
		</div>
		<script>
			function image(){
				var s=3;
            var x = setInterval(() => {
                  s--;
                 
                  if(s==3){
                     document.getElementById("img").style.display="block";
					 document.getElementById("img1").style.display="none";
					 document.getElementById("img2").style.display="none";
                  }
				  if(s==2){
					document.getElementById("img").style.display="none";
					document.getElementById("img1").style.display="block";
					document.getElementById("img2").style.display="none";
                  }
				  if(s==1){
					document.getElementById("img").style.display="none";
					document.getElementById("img1").style.display="none";
					document.getElementById("img2").style.display="block";
					s=4;
                  }
				  function stop(){
					  s=0;
				  }
				  if(s==0){
                      clearInterval(x);
                  }
              }, 5000);

			}
		      function closead(){
				  document.getElementById("close").style.display="none";
			  }
		</script>
		<div  style=" margin-top:5px;width:280px;">
			<div >
				
				<div   id="close" style="display:block;" >
				
						<img class="ads" id="img" style="display:none;" src="image/ads.jpg">
						<img class="ads" id="img1" style="display:none;" src="image/ads1.jpg">
						<img class="ads" id="img2" style="display:none;" src="image/ads2.jpg">
				
						<button style="margin-top:10px;" type="button" onclick="closead()" class="btn btn-info btn-block">CloseAds</button>
				</div>
			</div>
			
	</div>
	</div>
	<script>
	   function suggestion(){

	   }
	
	</script>
	<div class="row" >
<div class="col-sm-3" style=" margin-top:5px">
	<div class="card"  id="suggestion" >
		<div class="card-body">
				<img  style="height: 150px;" src="image/arduino.jpg">

		</div>
	</div>
</div>
<div class="col-sm-3" style=" margin-top:5px">
		<div class="card"  id="suggestion" >
			<div class="card-body">
					<img  style="height: 150px;" src="image/arduino.jpg">
	
			</div>
		</div>
	</div>
<div class="col-sm-3" style=" margin-top:5px">
		<div class="card"  id="suggestion" >
			<div class="card-body">
					<img  style="height: 150px;" src="image/arduino.jpg">
	
			</div>
		</div>
	</div>
	<div class="col-sm-3" style=" margin-top:5px" >
			<div class="card" id="suggestion" >
				<div class="card-body">
						<img  style="height: 150px;" src="image/arduino.jpg">
		
				</div>
			</div>
		</div>
		<div class="col-sm-3" style=" margin-top:5px" >
				<div class="card" id="suggestion1" style="display: none;">
					<div class="card-body">
							<img  style="height: 150px;" src="image/arduino.jpg">
							
			
					</div>
				</div>
			</div>
			<div class="col-sm-3" style=" margin-top:5px">
					<div class="card"  id="suggestion1" style="display: none;">
						<div class="card-body">
								<img  style="height: 150px;" src="image/arduino.jpg">
								
				
						</div>
					</div>
				</div>
				<div class="col-sm-3" style=" margin-top:5px" >
						<div class="card" id="suggestion1" style="display: none;">
							<div class="card-body">
									<img  style="height: 150px;" src="image/arduino.jpg">
									
					
							</div>
						</div>
					</div>
					<div class="col-sm-3" style=" margin-top:5px" >
							<div class="card" id="suggestion1" style="display: none;">
								<div class="card-body">
										<img  style="height: 150px;" src="image/arduino.jpg">
										
						
								</div>
							</div>
						</div>
	</div>
	<button type="button" class="btn btn-primary" >Back!</button>
</div>


  </div>
</div>
<?php
	include "include/footer.php";
?>