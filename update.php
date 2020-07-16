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
	<div class="col-sm-12" style=" margin-top:20px;margin-bottom:20px;">
	<div class="card " style="">
   
	<div class="card-body col-sm-6" style="margin:0 auto;">
    <form  action="" method="">
				<div class="form-group">
							<div class="form-row">
							  <div class="col-md-6">
								<div class="form-label-group">
								<label for="firstName">First name</label>
								  <input type="text" name="fastname" id="firstName" class="form-control" placeholder="First name"  autofocus="autofocus">
								  
								</div>
							  </div>
							  <div class="col-md-6">
								<div class="form-label-group">
								 <label for="lastName">Last name</label>
								  <input type="text" name="lastname" id="lastName" class="form-control" placeholder="Last name" >
								 
								</div>
							  </div>
							</div>
						  </div>			<div class="form-group">
			<label>E-mail:</label>
				<input name="description" type="text" class="form-control" placeholder="Write your email"required="">
			</div>
							<div class="form-group">
							<div class="form-row">
							  <div class="col-md-6">
								<div class="form-label-group">
								<label for="firstName">Mobile No.</label>
								  <input type="text" name="fastname" id="firstName" class="form-control" placeholder="Mobile no.."  autofocus="autofocus">
								  
								</div>
							  </div>
							  <div class="col-md-6">
								<div class="form-label-group">
								 <label for="lastName">NID</label>
								  <input type="text" name="NID.." id="lastName" class="form-control" placeholder="Last name" >
								 
								</div>
							  </div>
							</div>
						  </div>			
				
				<div class="form-group">

			<div class="form-group">
			<label>Home Town:</label>
				<input name="description" type="text" class="form-control" placeholder="Write your home town"required="">
			</div>
			<div class="form-group">
			<label>Lives in:</label>
				<input name="description" type="text" class="form-control" placeholder="Write where you live"required="">
			</div>
			<div class="form-group">
			<label>Location  :</label>
				<input name="description" type="text" class="form-control" placeholder="Write your location"required="">
			</div>
			<div class="form-group">
							<div class="form-row">
							  <div class="col-md-6">
								<div class="form-label-group">
								<label for="firstName">Date of Birth</label>
								  <input type="text" name="fastname" id="firstName" class="form-control" placeholder="DD/MM/YYYY"  autofocus="autofocus">
								  
								</div>
							  </div>
							  <div class="col-md-6">
                <div class="form-label-group">
				<label >User Type</label>
                  <div class="form-label-group">
                     <select name="condition"  class="form-control" >
								<option placeholder="none">Select</option>
								<option placeholder="Bashundhara">Agent</option>
								<option placeholder="Bashundhara">Customer</option>
					</select>
				</div>
                </div>
              </div>
							</div>
						  </div>	
			
			<button type="submit" class="btn btn-info mb-2">Update</button>
</form>
	
	
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