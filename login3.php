<style>
body{color: purple;background-color:#b5e7a0;}
th{padding:6px;}
</style>
<?php
session_start();
?>
<?php
include 'timedate.php'; 
include 'connect1.php';
echo "<br><br>";		

				/*MySqli Stripslashes && MySqli Real Escape String.*/

@$c=$_POST['em'];$aa=addslashes($c);$aa=mysqli_real_escape_string($con,$c);

@$d=$_POST['pswd'];$bb=addslashes($d);$bb=mysqli_real_escape_string($con,$d);	

$cx=$_SESSION['id']=$c;

if(isset($_POST['submit'])&& isset($_POST['em']) || isset($_POST['pswd'])){

if(!empty($_POST['em'])  && !empty($_POST['pswd'])){
	
$q = mysqli_query($con,"select email,password from test where email='$c' and password='$d'");		

$row=mysqli_fetch_array($q);

if($row['email']==stripslashes($c) && $row['password']==stripslashes($d)){
	
	echo "<div align='center'><i><u><font size='6'>Welcome</u></i>"." "." "." "." ".$_SESSION['id'].
	"</font>";echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";echo "<u><i><font size='6'>You're now logged in</font></u></i></div>";	
	echo "<br><br><br><br><br>";
	echo "<div align='center'><font size='6'>Redirecting in 2 secs.....</font></div>";
	header("refresh:2; url=res.php");
}
else	{
			echo "<div align='center'><i><u><font size='6'>Login failed.Incorrect Email Or Password!!</font></u></i></div><br><br>";
			echo "<div align='center'><font size='6'>Redirecting in 2 secs.....</font></div>";			
		    header("refresh:2; url=emaillogin.php");
		}
}
else 	{ 
			echo "<div align='center'><i><u><font size='6'>Fields are Empty</font></u></i></div><br><br>";
			echo "<div align='center'><font size='6'>Redirecting in 2 secs.....</font></div>";			
		    header("refresh:2; url=emaillogin.php");

		}
}								
?>	
		
