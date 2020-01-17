<?php
if(isset($_POST["submit"]))
{
	$x="#@@$%$@!$%^";
	$name=$_POST["name"];
	$f_name=$_POST["f_name"];
	$addr=$_POST["addr"];
	$clg=$_POST["clg"];
	$email=$_POST["email"];
	$pass=crypt($_POST["pass"],$x);
	$mob=$_POST["mob"];
	

	$con=mysqli_connect("localhost","root","","info");
	$q="insert into student_info values('$name','$f_name','$addr','$clg','$email','$mob','$pass')";
	mysqli_query($con,$q);
	mysqli_close($con);


?>
<!DOCTYPE html>
<html lang="en-US">
<head>
	
<link rel="stylesheet" type="text/css" href="./css/style.css" />

<script src="./javascript/main.js" type="text/javascript"></script>
</head>
<style>
.t1{
	font-size:25px;
	font-family:calibri;
	font-weight:bold;
	text-shadow:3px 3px 4px ywllow;
	
}
</style>
<body>



<br/><br/><center>
<section style="height:200px;"class="sec2">
<div class="t1">
Your form is submitted Successfully.<br/>
<a href="login.php">Back to login page</a>
</div>
</section>
<center>
<br/><br/>

<hr/>

<center>

</center>
</body>
</html>

<?php
}

?>