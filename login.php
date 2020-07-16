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
	<div class="col-sm-4" style="margin-top:20px;">
				<div class="login">
						<form action="" method="" style="padding:10px;">
						<p style="text-align:center;border-bottom:1px dashed #777;padding:10px;font-size:26px; color:#06265F;">Login Here!</p>
						<div class="form-group">
			<label>Email:</label>
				<input name="description" type="text" class="form-control" placeholder="Write your email"required="">
			</div>
			<div class="form-group">
			<label>Password:</label>
				<input name="description" type="password" class="form-control" placeholder="Write your password"required="">
			</div>
					<input type="submit" class="btn btn-primary btn-block" value="Login"/>

						</form>
				</div>
		</div>
		
		<div  class="col-sm-8" style="margin-top:20px;">
		<div class="register">
		<form  action="" method="" style="padding:10px;">
		<p style="text-align:center;border-bottom:1px dashed #777;padding:10px;font-size:26px;color:#06265F;">Register Here!</p>
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
							<br>
						
							<div class="form-group">
							<div class="form-row">
							  <div class="col-md-6">
								<div class="form-label-group">
								<label for="firstName">Email :</label>
								  <input type="text" name="fastname" id="firstName" class="form-control" placeholder="Mobile no.."  autofocus="autofocus">
								  
								</div>
							  </div>
							  
							  <div class="col-md-6">
								<div class="form-label-group">
								 <label for="lastName">Mobile : </label>
								  <input type="text" name="NID.." id="lastName" class="form-control" placeholder="Last name" >
								 
								</div>
							  </div>
							</div>
						  </div>			
				
				<div class="form-group">

			<div class="form-group">
			<label>Address:</label>
				<textarea name="description" type="text" class="form-control" placeholder="Write your home town"required=""></textarea>
			</div>
			
			<div class="form-group">
							<div class="form-row">
							  <div class="col-md-6">
								<div class="form-label-group">
								<label for="firstName">Password</label>
								<input type="password" name="password" class="form-control" placeholder="Password" >
								  
								</div>
							  </div>
							  <div class="col-md-6">
                <div class="form-label-group">
				<label >Confirm Password</label>
                  <div class="form-label-group">
                    <input type="password" name="password"  class="form-control" placeholder="Confirm Password">
				</div>
                </div>
              </div>
							</div>
						  </div>	
			<div class="d-flex justify-content-center">
			<button type="submit" class="btn btn-info btn-block">Register</button>
			</div>
			
</form>
				</div>
	</div>
	
		
</div>


  </div>
</div>
</div>
<?php
	include "include/footer.php";
?>