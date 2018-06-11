<?php 
session_start();
include 'timedate.php'; echo "<br><br><br>"; 
?>

<style>
body{color: purple;background-color:#b5e7a0;}
th{padding:6px;}
</style>

<?php
include 'connect1.php';

					/*MySqli Stripslashes && MySqli Real Escape String.*/

@$a=$_POST['un'];$aa=addslashes($a);$aa=mysqli_real_escape_string($con,$a);

@$b=$_POST['psw'];$bb=addslashes($b);$bb=mysqli_real_escape_string($con,$b);

$cx=$_SESSION['id']=$a;

if(isset($_POST['submit'])&& isset($_POST['un']) || isset($_POST['psw'])){

if(!empty($_POST['un'])  && !empty($_POST['psw'])){
	
$q = mysqli_query($con,"select uname,password from test where uname='$a' and password='$b'");		

$row=mysqli_fetch_array($q);

if($row['uname']==stripslashes($a) && $row['password']==stripslashes($b)){
	
	echo "<div align='center'><i><u><font size='6'>Welcome</u></i>"." "." "." "." ".$_SESSION['id'].
	"</font>";echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";echo "<u><i><font size='6'>You're now logged in</font></u></i></div>";	
	echo "<br><br><br><br><br>";
		echo "<div align='center'><font size='6'>Redirecting in 2 secs.....</font></div>";
	header("refresh:2; url=res.php");
	}
	else	{
			echo "<div align='center'><i><u><font size='6'>Login failed.Incorrect User Name Or Password!!</font></u></i></div><br><br>";
			echo "<div align='center'><font size='6'>Redirecting in 2 secs.....</font></div>";			
		    header("refresh:2; url=login.php");
		}
}
else 	{ 
			echo "<div align='center'><i><u><font size='6'>Fields are Empty</font></u></i></div><br><br>";
			echo "<div align='center'><font size='6'>Login failed.Redirecting you back.....</font></div>";			
		    header("refresh:2; url=login.php");
		}
}
?>







