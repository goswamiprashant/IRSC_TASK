    <!DOCTYPE html>
<html lang="en-US">
<head>
<link rel="stylesheet" type="text/css" href="./css/style.css" />

<script src="./javascript/main.js" type="text/javascript"></script>
</head>
<body>

<br/><br/>

<center>

<section style="height:200px;width:400px;margin:100px;"class="sec2">
<form method="post" action="verify.php" >

<table class="f1" >
<tr>
<th>
Email:</th><td><input onkeyup="return validation()" name="email" id="email"  style="height:30px;" type="email" placeholder="Enter your email" /><br/><span id="err5"></span>
</td></tr>
<tr><th>
Password:</th><td><input name="pass" id="pass"  style="height:30px;" type="text" placeholder="Enter Password" </td>
</tr>
<tr ><td><input name="submit" style="float:right;height:30px"value ="Login" type="submit"/></center></td>
<td>
<button style="height:30px;" ><a style="text-decoration:none;color:black;" href="create.php"> Create Account</a></button>
</td></tr>
</table>
</form>
</section>

</center>


</div>
</body>
</html>