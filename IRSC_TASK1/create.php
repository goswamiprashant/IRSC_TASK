  <!DOCTYPE html>
<html lang="en-US">
<head>
	
<link rel="stylesheet" type="text/css" href="./css/style.css" />

<script src="./javascript/main.js" type="text/javascript"></script>
</head>
<body>



<br/><br/>

<center>

<section class="sec2">

<div style="text-decoration:underline;font-size:40px;text-shadow:4px 4px 6px black;" class="ef2">JOINING FORM</div>
<form method="post" action="thank.php" onsubmit="return validation()">

<table class="f1">
<tr>
<th>Name:</th>
<td ><input onkeyup="return validation()" id="name"  name="name" style="height:30px;"type="text" placeholder="Enter your name" /><br/><span id="err1"></span></td>
</tr>
<tr><th>
Father's Name:</th><td><input onkeyup="return validation()" id="f_name" name="f_name"style="height:30px;"type="text" placeholder="Enter your father's name" /><br/><span id="err2"></span>
</td>
</tr>
<tr>
<th>Permanent Address:</th><td><input onkeyup="return validation()" id="addr" name="addr" style="height:30px;"type="text" placeholder="Enter your address" /><br/><span id="err3"></span>
</td>
</tr>
<tr>
<th>
College or School:</th><td><input onkeyup="return validation()" id="clg" name="clg" style="height:30px;" type="text" placeholder="Collge or School Name" /><br/><span id="err4"></span>
</td></tr>
<tr><th>
Email:</th><td><input onkeyup="return validation()" name="email" id="email"  style="height:30px;" type="email" placeholder="Enter your email" /><br/><span id="err5"></span>
</td></tr>

<tr><th>
Password:</th><td><input onkeyup="return validation()" name="pass" id="pass"  style="height:30px;" type="password" placeholder="Enter your password" /><br/><span id="err7"></span>
</td></tr>

<tr><th>
Confirm Password:</th><td><input onkeyup="return validation()" name="cpass" id="cpass"  style="height:30px;" type="password" placeholder="Confirm Password" /><br/><span id="err8"></span>
</td></tr>
<tr><th>
Mobile No:</th><td><input onkeyup="return validation()" name="mob" id="mob" style="height:30px;"type="text" placeholder="Mobile Number" /><br/><span id="err6"></span>
</td></tr>
<tr><td><input name="submit" style="float:right;height:30px"value ="Submit" type="submit"/></td></tr>
</table>
<center><p><a style="font-size:20px;"href="login.php">Login to an existing account </a></p></center>
</form>
</section>

</center>
<br/>
<br/>


</body>
</html>