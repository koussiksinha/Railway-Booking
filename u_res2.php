<?php
session_start();
?>

<?php
include 'timedate.php';
include 'connect1.php';
echo "<ul class='navbar'>";
echo "<li><a href='form.php'>Home</a></li><br /><li><a href='logout.php'>LOGOUT</a></li>";
echo "</ul>";
$a=$_POST['email'];
$b=$_POST['password'];  
$sql="select uname,fname from test where email='$a' and password='$b';";
$res=mysqli_query($con,$sql);
$res_check=mysqli_num_rows($res);
if($res_check>0){
while($row=mysqli_fetch_assoc($res)){ 
 	echo "Hi"."-".$row['fname'].$row['lname'];
 echo "<br><br>";
 echo "Your User_Name"." "." "."=".$row['uname']."<br><br>";
 
}
}
else{
echo "<br>  unsuccessful, NOT found <br>";
	}
  echo "</table>";	
 echo "<a href='login.php'> Go Back </a>";
 
?>