<?php
include "include/header.php";



  $db = new Database();
?>
<?php
  header("Cache-Conttrol: no-cache, must-revalidate");
  header("Pragma: no-cache");
  header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
  header("Cache-Control: max-age=2592000");



 
?>
<div class="mainsection" style="background:#f1f1f1;">
    <div class="container" >
	
	<div class="row">
	<div style="width:850px;">
		<div class="row">
		<?php
			$query="select * from productlist;";
			$product = $db->select($query);
			if($product){
				while($result=$product->fetch_assoc()){



         ?>
	
	<div  style="margin:2px;width:280px;">
	<div class="card " style=" border-radius:10px;">
    <div class="card-body">
	
		<img src="image/<?php echo $result['image']; ?>">
		<hr>
		<h5><?php echo $result['pname']; ?></h5>
		<h6><?php echo $result['pdescription']; ?></h6>
		<p><?php echo $result['pprice']; ?></p>
	
		<a href="details.php?id=<?php echo $result['pid'];?>" class="btn btn-secondary btn-block stretched-link">See Details </a>
	
	
		
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
		      function category(b){
				  //First time click
				  if(b.shefa != 'Click'){
         			  b.shefa = "Click";
        			  document.getElementById("catid").style.display="none";
        		 }//end if

       //When click it again..
      		 else if(b.shefa == 'Click'){
        		   b.shefa = "Unclick";
				   document.getElementById("catid").style.display="block";
     			  }//end else
			  }//end function
		</script>
		<div  style=" margin-top:5px;width:280px;">
			<div class="card ">
				
				<div class="card-body " >
						<p  onclick="category(this)"  style="text-align:center;display:block;background: #06265F;padding:5px;border:1px solid #777;
					color: #FFF; font-size:20px;border-radius: 5px;
					">Categories</p>
					<ul class="cat" id="catid" >
						<li><a href=""></a>Micro-Controller</li>
						<li>WiFi Module</li>
						<li>Digital ICs</li>
						<li>Analog ICs</li>
						<li>Connection</li>
						<li>Sensors</li>
						<li>Micro-Controller</li>
						<li>WiFi Module</li>
						<li>Digital ICs</li>
						<li>Analog ICs</li>
						<li>Connection</li>
						<li>Sensors</li>
						<li>Micro-Controller</li>
						<li>WiFi Module</li>
						<li>Digital ICs</li>
						<li>Analog ICs</li>
						<li>Connection</li>
						<li>Sensors</li>


					</ul>
	
	
				</div>
			</div>
	</div>
	</div>
		<ul class="pagination" style="margin:10px;">
			  <li class="page-item"><a class="page-link" href="#">Previous</a></li>
			  <li class="page-item active"><a class="page-link" href="#">1</a></li>
			  <li class="page-item "><a class="page-link" href="#">2</a></li>
			  <li class="page-item"><a class="page-link" href="#">3</a></li>
			  <li class="page-item"><a class="page-link" href="#">4</a></li>
			  <li class="page-item"><a class="page-link" href="#">5</a></li>
			  <li class="page-item"><a class="page-link" href="#">Next</a></li>
       </ul>
</div>


  </div>
</div>

<?php
	include "include/footer.php";
?>