<!DOCTYPE html>
<html lang="en">
<head>
  <title>Travel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="CSS/bootstrap.min.css">
  <link rel="stylesheet" href="CSS/style.css">
  <script src="JS/jquery.min.js"></script>
  <script src="JS/popper.min.js"></script>
  <script src="JS/bootstrap.min.js"></script>
  
</head>
<body onload="startTime()">
<nav class="navbar navbar-expand-sm bg-white sticky-top" style=" box-shadow:2px 2px 2px #f1f1f1; height:60px;">

	
	<a href="profile.html" class="navbar navbar-brand">Profile</a>
	<a href="index.html" class="navbar navbar-brand">Forum</a>
	<a href="browse.html" class="navbar navbar-brand">Browse Pakage</a>
	</nav>
<div class="mainsection">
    <div class="container" style="background:#f1f1f1;">
	<div class="row">
			<div class="col-sm-12" style=" ">
				<div class="card " style="">
					
				</div>
			<div class="card " style="">
					<div class="card-body " >
					<img src="image/cover.jpg" alt="Cover photo" style="height:250px;width:100%;">
					<div class="profile">
					<img src="image/profile.jpg" style="">
					</div>
						<div class="information">
							<h3>Bayazid Talukder</h3>
							<h4>E-mail : bayazid.talukder@northsouth.edu</h4>
							<h5>Phone No. 01772242616</h5>
							<h5>Location: Khilkhet</h5>
							</div>
				
					</div>
							<h4 style="text-align:center;color:#02569F;">Other Information</h4>
					<div class="card-body " style="">
					      <div class="otherinfo">
						  <p>NID</p>
						  <p>Lives in</p>
						  <p>Home Town</p>
						  <p>Interest</p>
						  <p>Date of Birth:</p>
						  <p></p>
						  <p></p>
						 </div>
						<div class="card bg-info" style="max-width:400px;margin:0 auto;">
				   
					<div class="card-body " style="margin:0 auto;">
						<h4>Update!</h4>
						 
					  <a href="update.html" class="stretched-link" style="float:right;"></a>
								</div>
							</div>
			
					
						</div>
				</div>
		</div>
	</div>
	
	</div>
	
</div>

  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
       
        <div class="modal-header">
          <h4 class="modal-title">Comments</h4>
          <button type="button" class="close" data-dismiss="modal">x</button>
        </div>
        <div class="modal-body">
          <h5>Name:</h5>
		  <p>comment body</p>
        </div>
		<div class="modal-body">
          <h5>Name:</h5>
		  <p>comment body</p>
        </div>
		<div class="modal-body">
          <h5>Name:</h5>
		  <p>comment body</p>
        </div>
		<div class="modal-body">
          <h5>Name:</h5>
		  <p>comment body</p>
        </div>
		<div class="modal-body">
          <h5>Name:</h5>
		  <p>comment body</p>
        </div>
		<div class="modal-body">
          <h5>Name:</h5>
		  <p>comment body</p>
        </div>
		<div class="modal-body">
          <h5>Name:</h5>
		  <p>comment body</p>
        </div>
		<div class="modal-body">
          <h5>Name:</h5>
		  <p>comment body</p>
        </div>
		
        <form method="" action="">
	<div class="form-group">
	<label>Write your comments...</label>
				<input name="description" type="text" class="form-control" placeholder="Write a comments"required="">
			</div>
			<div class="modal-footer">
			<input type="submit" class="btn btn-info" name="submit" value="Submit">
	</form>
     
        
          
        </div>
        
      </div>
    </div>
  </div>
</div>
<div class="footer">
		<h4>This is footer section</h4>
		
		<script>
function startTime() {
  var today = new Date();
  var h = today.getHours();
  var m = today.getMinutes();
  var s = today.getSeconds();
  m = checkTime(m);
  s = checkTime(s);
  document.getElementById('txt').innerHTML ="Current Time: "+
  h + ":" + m + ":" + s;
  var t = setTimeout(startTime, 500);
}
function checkTime(i) {
  if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
  return i;
}
</script>
<div id="txt"></div>
		
		<div class="lastfoot">
		  @ TravelersBd 2019
		</div>
</div>

</body>
</html>