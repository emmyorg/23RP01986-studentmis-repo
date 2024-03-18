<?php 
if(isset($_POST['submit'])){ 
$dbconn=mysqli_connect("mysql","root","","schooldb"); // Database connetion 
// inserting in Database 
$firstname=$_POST['firstname']; 
$lastname=$_POST['lastname']; 
$regno=$_POST['regno']; 

$sql="INSERT INTO tbl_student SET firstname='$firstname',  
lastname='$lastname',regno='$regno'"; 
$quer =mysqli_query($dbconn,$sql); 
header("location:table.php"); 
} ?> 
<!DOCTYPE html> <html> <head>  <title> USER REGISTRATION</title> 


        

</head>  <body background="t.JPG"><center>  
<h1><i><b>USER REGISTRATION</b></i></h1>    
<table> <form action="" method="POST"> 
<tr><td>names</b></td><td><input type="text" name="names"  ></td></tr> 


<tr><td>email</b></td><td><input type="text" name="email" ></td></tr> 
<tr><td>password</b></td><td><input type="text" name="password" ></td></tr> 

<tr><td><input type="submit" name="submit" ></td> 
<td><a  href="table.php" > </a></td></tr> 
</div>
</form> </table></center></body> </html> 