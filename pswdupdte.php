<?php
include 'timedate.php';
session_start();
?>

<!DOCTYPE HTML5>
<html>
<head>
<title>Password Reset</title>
<style>
body {
  font-family: Arial; 
 background-color:MEDIUMAQUAMARINE ;
}
</style>
</head>
<body>
<ul class="navbar">
<li><a href="form.php">Home</a></li><br />
<li><a href="logout.php" align="right">Logout</a></li>
</ul>
<table >
<form name= "f2"  action="pswdupdte.php"  method="POST" >
<br/>
<fieldset>
<legend><u><font color= "Brown">Update Your Password</font></u></legend>
<p>
 <font color= "Blue">Enter User Name</font>
<input type ="text" name="uname">
</p>

<p>
 <font color= "Blue">Enter Old Password</font>
<input type ="password" name="psw1">
</p>
<p>
<font color= "Blue"> Enter New Password</font>
<input type ="password" name="psw">
</p>
<p>
<font color= "Blue">Re-Type Password</font>
<input type ="password" name="cpsw">

</p><br/><br/>

<font color= "Blue">SUBMIT</font><input type="submit" name ="submit" value="UPDATE PASSWORD">
<font color= "Blue">CANCEL</font><input type="RESET" name="reset" value="CANCEL">
</fieldset>
</form>
</body>
</head>
</html>

<!------------------HTML ENDS -------------!>
<!------------------HTML ENDS -------------!>
<!------------------HTML ENDS -------------!>
<!------------------HTML ENDS -------------!>

<?php
include 'connect1.php';
@$a=mysqli_real_escape_string($con,$_POST['uname']);
@$b=mysqli_real_escape_string($con,$_POST['psw1']);
@$c=mysqli_real_escape_string($con,$_POST['psw']);
@$d=mysqli_real_escape_string($con,$_POST['cpsw']);
$cx=$_SESSION['id']=$a;

if(isset($_POST['submit']) &&  !empty($_POST['uname']) && !empty($_POST['psw1'])&& !empty($_POST['psw'])&& !empty($_POST['cpsw']))
{
	
	echo "<br>";
	echo "<u><font color='Blue' size='6'>Welcome !"." "." ".$_SESSION['id']."</font></u><br><br>";
	
	/* FETCH DATA WITH MYSQLI COMMAND. */
	
$sql=mysqli_query($con,"select * from test where uname='$a' ");

$row=mysqli_fetch_assoc($sql);

$e=$row['uname'];$f=$row['password'];

if($b==$f ){
	
if($c==$d){
	
	echo "<u>Success</u>"; 
	echo "<br>";
	
	/* UPDATING PASSWORDS WITH MYSQLI COMMAND. */
	
$u=	mysqli_query($con,"UPDATE test SET password='$c' , cpsw='$d' WHERE uname='$a'");
echo "<br>";

echo ("<u>Password Change</u>.<br>.<a href='login.php'><u><font color='Blue' size='4'>
Login Now</font></u></a>"); echo "<br>";
$s=mysqli_query($con,"select * from test where uname='$a' ");

$row=mysqli_fetch_assoc($s);
$a=$row['uname'];$f=$row['password'];
$cx=$row['fname'];$dx=$row['lname'];$ex=$row['email'];
		
		/* FETCH DATA WITH MYSQLI COMMAND. */
		
echo "<fieldset>
<legend><u><font color= 'Brown'>Your Details</font></u></legend>
<p>
 <font color= 'Blue'>User Name</font>
<input type ='text'  value='$a'>
</p>
<p>
<font color= 'Blue'>First Name</font>
<input type ='text' value='$cx'>
</p>
<p>
<font color= 'Blue'>Last Name</font>
<input type ='text' value='$dx'>
</p>
<p>
<font color= 'Blue'>Email</font>
<input type ='text' value='$ex'>
<p>
 <font color= 'Blue'> New Password</font>
<input type ='password' value='$f'>
</p>

</p>
</fieldset>";




}	
else{
	echo "<u><font color='Blue' size='4'> New & Confirm Passwords.Don't Match</font></u>";
}		
}
else {
	
	echo "<u><font color='Blue' size='4'>Old Password Incorrect!</font></u>";
}	
}
?>	
	
	
	
	

	
	
	
		
	














