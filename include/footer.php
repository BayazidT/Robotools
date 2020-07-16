<div class="bg-dark text-center" onload="startTime()" style="min-height:150px;">
<div class="container" style="margin-top:30px">

  <div class="row" style="background:#06101A;border-radius:5px;padding-bottom:30px;">
  
    <div class="col-sm-4" style="margin-top:20px;color:#6E9331;font-size:16px;">
	<a href="#" >Register here</a></br>
<a href="#">Login here</a></br>
<a href="#" >Buy or sell?</a></br>
<a href="#">House rent?</a></br>
<a href="#" >Tuition or tutor?</a></br>

<a href="#">About</a></br>
<a href="#">Policy</a></br>

</div>

<div class="col-sm-3" style="margin-top:20px; color:#94c045;font-size:16px;">
			<a href="http://www.educationboard.gov.bd/" target="_blank">Education Board</a></br>
			<a href="http://www.nctb.gov.bd/" target="_blank">NCTB Bangladesh</a></br>
			<a href="http://www.nidw.gov.bd/" target="_blank">Election Board</a></br>
			<a href="http://www.northsouth.edu" target="_blank">North University</a></br>
<a href="http://rds3.northsouth.edu" target="_blank">NSU Portal</a></br>
<a href="http://tutorbd.xyz" target="_blank">TutorBd</a></br>
</div>
<div class="col-sm-4"style="margin-top:20px;color:#6E9331;font-size:16px;">
<p>Tadpole Co. Ltd.</p>

<p>Gallexy Street </p>
<p>Milky_Way </p>
<a href="https://sites.google.com/view/btinfo172/profile?authuser=0" target="_blank">Developer</a>


</div>

</div>
<div style="padding-top:20px;color:#fff;padding-bottom:20px;">
<h4 >&copy <a href="index.php">AlpoSholpo.com 2019</a></h4>
<p id="txt"></p>
<h6>All right received.</h6>
</div>
</div>
</div>
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
</body>
</html>
