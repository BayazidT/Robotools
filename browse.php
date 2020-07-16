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
   
	<div class="card-body " style="">
	<div style="height:69px;">
	
	<h4></h4>
		</div>
		<div class="card bg-info" style="max-width:400px;margin:0 auto;">
   
	<div class="card-body " style="margin:0 auto;">
		<h4>Plan a Trip!</h4>
	     
	  <a href="#" class="stretched-link" style="float:right;"></a>
				</div>
			</div>
	
			<table class="table table-striped table-hover" style="margin:10px;" >
    <thead>
      <tr>
        <th width="10%">Serial</th>
        <th width="20%">Pakage Name</th>
        <th width="25%">Hotel Name</th>
        <th width="20%">Location</th>
        <th width="15%">Date</th>
        <th width="10%">Action</th>
      </tr>
    </thead>
    <tbody>
     <tr>
        <td>01.</td>
        <td>Summer Flash</td>
        <td>Red Palace</td>
        <td>Island</td>
        <td>06/07/2024</td>
         <td><a href="#">Details</a></td>
      </tr>
	  <tr>
        <td>02.</td>
        <td>Tadpole</td>
        <td>Black_Shade</td>
        <td>New York</td>
        <td>06/07/2022</td>
		<td><a href="#">Details</a></td>
      </tr>
	  <tr>
        <td>03.</td>
        <td>Haming Bird</td>
        <td>Red Palace</td>
        <td>Island</td>
        <td>06/07/2024</td>
		<td><a href="#">Details</a></td>
      </tr>
	  <tr>
        <td>04.</td>
        <td>Fog and Frog</td>
        <td>Red Palace</td>
        <td>Island</td>
        <td>06/07/2024</td>
		<td><a href="#">Details</a></td>
      </tr><tr>
        <td>05.</td>
        <td>Spring Bite</td>
        <td>Red Palace</td>
        <td>Island</td>
        <td>06/07/2024</td>
		<td><a href="#">Details</a></td>
      </tr>
	  <tr>
        <td>06.</td>
        <td>H.M Special</td>
        <td>Phoenix </td>
        <td>Island</td>
        <td>06/07/2024</td>
		<td><a href="#">Details</a></td>
      </tr>
	  <tr>
        <td>07.</td>
        <td>Haming Bird</td>
        <td>Hunted Palace</td>
        <td>Island</td>
        <td>06/07/2024</td>
		<td><a href="#">Details</a></td>
      </tr>
	  <tr>
        <td>08.</td>
        <td>Haming Bird</td>
        <td>Red Palace</td>
        <td>Island</td>
        <td>06/07/2024</td>
		<td><a href="#">Details</a></td>
      </tr>
	  <tr>
        <td>09.</td>
        <td>Haming Bird</td>
        <td>Red Palace</td>
        <td>Island</td>
        <td>06/07/2024</td>
		<td><a href="#">Details</a></td>
      </tr>
	  <tr>
        <td>10.</td>
        <td>Haming Bird</td>
        <td>Red Palace</td>
        <td>Island</td>
        <td>06/07/2024</td>
		<td><a href="#">Details</a></td>
      </tr>
     
    </tbody>
  </table>
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