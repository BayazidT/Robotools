<?php
      include "include/header.php";


		$db=new Database();
		$shefa=session_id();
?>
<div class="mainsection" style="background:#f1f1f1;">
    <div class="container" >
	
	<div class="row">
	<div style="width:850px;">
		<div class="row">
	<div class="col-sm-12" >




			<table class="table table-striped" style="boder:1px solid #777;">
					<thead>
					  <tr>
						<th width="25%" >Product Name</th>
					
						<th width="25%" >Image</th>
						<th width="15%" >Price</th>
						<th  width="25%" >Quantity</th>
						<th width="10%" >Action</th>
					  </tr>
					</thead>
					<tbody>
					<?php
					$total=0;
					$counter=0;
			$cartProduct=$ct->getCartProduct($shefa);
			if($cartProduct){
				while($result = $cartProduct->fetch_assoc()){

					$total=$total+($result['pprice']*$result['quantity']);
					$counter++;
		

	?>
					 <tr>
						  <td><?php echo $result['pname']; ?></td>
					 
					  <td><img src="image/<?php echo $result['image']; ?>" style= "height:35px;width:40px; border-radius:5px;" ></td>
					  <td><?php echo $result['pprice']*($result['quantity']); ?></td>
					 <td><input type="number" min="1"style="width:35px;" value="<?php echo $result['quantity']; ?>"><input type="submit" name="update" value="Update"> </td>
					 <td><a href="#">Remove</a></td>
					</tr>
					<?php

			} 
		}
						$vat = $total*(.15) ;

					?>

				    </tbody>


			 </table>
			 <?php
			 if($counter>0){

			?>

			 <div class="" style="width:600px;float:right;min-height:100px; margin-bottom:20px;margin-left:40px;">
			 <div style="padding:10px; margin-left:300px; border-radius:5px;background:#fff; font-size:18px;color:#004481;">
			 <p>Total fare : <?php echo $total; ?> TK</p>
			 <p>VAT 15%       : <?php echo $vat; ?>  TK</p>
			 <p>Sub Total  : <?php echo $total+$vat; ?>  TK</p>

			 </div>

			 
			 </div>
			 <?php 

			 }else{
				 ?>
				 <p style="text-align:center; padding:10px;font-size:26px; color:#06265F;">You have not selected any products yet!</p>


				<?php
			 }

			 ?>
			


			
			 <button style="text-align: center;width: 220px;float:right;" type="button" class="btn btn-primary btn-block">Checkout</button>
			 <a href="index.php"> <button style="text-align: center; width: 220px;" type="button" class="btn btn-info">Add more</button></a>

	</div>
	
		
					
	
	
		
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
				<button style="margin-top:10px;" type="hidden" onclick="closead()" >X</button>
				
						<img class="ads" id="img" style="display:none;" src="image/ads.jpg">
						<img class="ads" id="img1" style="display:none;" src="image/ads1.jpg">
						<img class="ads" id="img2" style="display:none;" src="image/ads2.jpg">
				
						
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