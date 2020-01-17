<?php
session_start();
$x="#@@$%$@!$%^";
$email=$_POST["email"];
$pass=crypt($_POST["pass"],$x);
include("connection.php");
$q="select * from student_info where password='$pass'";
$x=mysqli_query($con,$q);
$arr=mysqli_fetch_array($x);
echo $email,$pass;
var_dump($arr);
if($arr)
{
$_SESSION["email"]=$email;
header("location:home.php");
}
else{
header("location:failed.php");
}




?>