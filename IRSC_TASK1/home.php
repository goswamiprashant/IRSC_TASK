  <?php
session_start();
if(isset($_SESSION["email"])){
	$email=$_SESSION["email"];

$con=mysqli_connect("localhost","root","","info");
	  $q="select * from student_info where Email='$email'";
	  $x=mysqli_query($con,$q);
	  $arr=mysqli_fetch_assoc($x);
	  mysqli_close($con);
	 
   ?>
   <center>
  <table cellspacing="0px" border="5px"cellpadding="30px" style="padding:30px;">
 <tr>
 <th>Name</th>
 <td><?php echo $arr["Name"];?> </td>
 </tr> 
 <tr>
 <th>Father's Name</th>
 <td><?php echo $arr["Fathers_Name"];?>   </td>
 </tr> 
 <tr>
 <th>Address</th>
 <td> <?php echo $arr["Address"];?>  </td>
 </tr> 
 <tr>
 <th>College or School</th>
 <td> <?php echo $arr["College_or_School"];?>  </td>
 </tr> 
 <tr>
 <th>Contact</th>
 <td> <?php echo $arr["Contact"];?>  </td>
 </tr> 
  
  
  
  </table>
  <button style="margin:10px;" ><a style="text-decoration:none;color:black;" href="logout.php"> Logout</a></button>
  
 </center>
  
  <?php
}
else{
header("loaction:login.php");
}
?>