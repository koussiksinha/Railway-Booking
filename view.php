<?php
session_start();
include 'timedate.php'; include 'connect1.php'; 
?>
<!DOCTYPE html5>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style5.css">
</head>
<a href="form.php" style="float: right;"><button>Home</button></a><br /><br />
<a href="pswdupdte.php" style="float: right;"><button>Reset Password</button></a><br /><br />
<a href="logout.php"style="float: right;"><button>Logout</button></a>
<body>
<form name="f3" method="POST" action="">

<div align="header">
<h2><font color="purple"><u>Profile Details</u></font></h2>
</div>

<div class="input-group">                    
<label><font color="purple">Enter User Name</font></label>
<input type="text" name="un" placeholder="Choose User Name">
</div>

<div class="input-group"> 
<button type="submit" name="submit" class="btn"><font color="purple">Submit</font></button>
</div>

<div class="input-group"> 
<button type="reset" name="reset" class="btn">Reset</button>
</div>

<div class="footer">
<p><marquee>All Rights Reserved. |@CopyRight 2018-2019</marquee></p>
</div>
</body>
</form>
</html>

<?php

if(isset($_POST['submit'])){
	
if(!empty($_POST['un'])){
	
@$a=$_POST['un'];
$aa=addslashes($a);$aa=mysqli_real_escape_string($con,$a);

@$cx=$_SESSION['id']=$a;

$q = mysqli_query($con,"select * from test where uname='$a'");		

$row=mysqli_fetch_array($q);

if($row['uname']==stripslashes($a)){
	
	echo "<div align='center'><i><u><font size='6'>Welcome</u></i>"." "." "." "." ".$_SESSION['id'].
	"</font>";echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";echo "<u><i><font size='6'>You're now logged in</font></u></i></div>";	
	echo "<br><br>";
	
	$l=$row['id'];

					$a=$row['uname'];

									$b=$row['fname'];

					$c=$row['lname'];

			$d=$row['email'];

$e=$row['password'];

	echo "<div class='header'>
				
				<b><legend><i><font color='purple'><font size='6'><u>Display Info</font></font></i></u></legend></b>
		
		</div>";

		echo "<div align='right'>Welcome"." "." ".$_SESSION['id']."</div>";

		echo "<fieldset>";

             echo  "<p><font color= '#9400D3'>First Name</font></p>";
              echo"<input type='text' value='$b' readonly >";
				echo"<p><font color= '#9400D3'>Last Name</font></p>";
				echo"<input type='text' value='$c' readonly>";
			echo "<p><font color= '#9400D3'>User_Name</font></p>";
			echo	"<input type='text' value='$a' readonly>";
			echo	"<p><font color= '#9400D3'>Email</font></p>
			<input type='text' value='$d' readonly >
			<p><font color= '#9400D3'>Password</font></p>
			<input type='password' value='$e' readonly />
<a href='login.php'> Login Now </a><a href='up_dt.php?id=$l'> Update Your Details</a></fieldset>
			<br><br>";   

}
else{
echo "<br><br><font color='Purple'><u><i>SORRY!! WE DON'T HAVE YOUR RECORDS.</u></i></font><br /><br />";
}		
}
else 	{ 
			echo "<div align='left'><i><u><font size='6'>Fields are Empty</font></u></i></div><br><br>";
			
		}
}
?>


















