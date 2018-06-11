<?php
session_start();
?>
<?php
//echo "Welcome To F1  ".$_SESSION['fname'];
$con=mysql_connect("localhost","root","1234");
$db=mysql_select_db("abcd");

$a=$_POST['uname'];
$b= $_POST['email']; 
$e=$_POST['psw'];
$f=$_POST['cpsw']; 

$query= mysql_query("select uname,email from test where uname='$a' and email='$b'");

if(mysql_num_rows($query)>0)
{
	 $query=mysql_query("Update test set password='$e',cpsw='$f' where uname='$a'");
	 //echo "Welcome ".$_SESSION['fname']." ".$_SESSION['email'];
	echo "<br /><br />";
	echo "Welcome ".$a;
	echo "<br /><br />";
	echo "your password has been update";
	echo "<br /><br />";
	echo  "New password"." ".$e;
	echo "<br /><br />";
	echo  "C-New password"." ".$f;
	echo "<br /><br />";
	
}
else {
	echo "<br /><font color='Red'> Sorry!!! No match found with this username and email.</font>";
	echo "<br /><br /><a href='p_res.php'>  Reset Your Password </a><br/>"; 
	  //$query=mysql_query("update pracproj1 set psw='$e',cpsw='$f' where uname='$a'");
		 //  echo "<br /><br /><a href='m.php'> Go Check Data </a><br/>"; 
		  
	}


 echo "<a href='login.php'> Go Back </a>";
?>