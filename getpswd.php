<?php 
session_start();
echo "<font color='purple'>";
include 'timedate.php';
echo "</font>"; echo "<br><br><br>";
echo "<div align='center'>
<marquee 
 text-align='center'
     direction='left'
     loop='7'
     scrollamount='1'
     scrolldelay='2'
     behavior='alternate'
     width='70%'
     bgcolor='MEDIUMAQUAMARINE' 
	      >
<font color='#800000'>Welcome To&nbsp;&nbsp;E-Ticketing Website</font>
</marquee>
</div>";
?>

<!DoctType Html5>
<html>
<head>
    <style>
	h2{color:DIMGRAY;text-align:center;}
			div{text-align: center;}
				body { font-family: Arial;background-color:MEDIUMAQUAMARINE;}
							.footer {position: fixed;left: 0;bottom:-10;width: 100%;background-color:MEDIUMAQUAMARINE;color:#800000;text-align:center;}
	</style>
</head>
<body>
<ul class="navbar">
			<li><a href="form.php">Home Page</a></li><br />
				<li><a href="login.php">User Name Login </a></li><br />
						<li><a href="emaillogin.php">Email Login</a></li>
</ul>
	<table align="left"><font color="crimson"></align></font>
<div class="header">
				<h2><u>Get Password </u></h2>
</div>

<form name="f2" action="getpswd.php" method="POST">

		<Font color="DIMGRAY"><h3><u><i> Email / User Name</i></u></h3></font>
				
				<table align="center" style="color:Purple">
						
						<div class="container">
<Font color="DARKMAGENTA">Email:</font>
			<input class="w3-input w3-animate-input" style="width:10%" type="email" name="email" required >

<Font color="DARKMAGENTA">UserName:</font>
			<input class="w3-input w3-animate-input" style="width:10%" type="text" name="uname" required>


			<input type="Submit" name="Submit" value="LOGIN">
</div>
</form>
		<div class="footer">
					<p><marquee 
							text-align='center'
									direction='left'
												loop='7'
														scrollamount='1'
											scrolldelay='2'
									behavior='alternate'
						 width='100%'
	bgcolor='MEDIUMAQUAMARINE' 
	      >All Rights Reserved. |@CopyRight 2018-2019</marquee></p>
     </div>
</table>
</body>
</html>
<?php

include 'connect1.php';

$a=$_POST['email'];

$b=$_POST['uname'];

$cx=$_SESSION['id']=$b;

if(isset($_POST['Submit']) && !empty($_POST['email']) && !empty($_POST['uname'])){

$result1=mysqli_query($con,"SELECT email,uname from test where email='$a' and uname='$b'");

$duplicate=mysqli_num_rows($result1);

if($duplicate==0){

echo "<table>";

echo "<font color='Red'>Wrong Email/UserName Combination.</font>";

echo "</table>";
   }
   
   else{

			$sql="select * from test where email='$a' and uname='$b'";

					$res=mysqli_query($con,$sql);

								$res_check=mysqli_num_rows($res);
										while($row=mysqli_fetch_assoc($res)){
				
				$a=$row['uname'];$b=$row['email'];$c=$row['password'];$d=$row['fname'];$e=$row['lname'];	

				echo "<fieldset>";
 	echo "<div style='position: absolute; top: 0; right: 0px; width: -40px; text-align:right;'>

			<font color='Crimson' size='4'>

				<u>Welcome </u>"."&nbsp;".$_SESSION['id']."<br><br>

			<a href='logout.php' title='Logout'>Logout</a></font></div>";
	
	echo "First Name<input type='text' value='$d' readonly>";
 
 echo "<br><br>";echo "Last Name<input type='text' value='$e' readonly>";
 
 echo "<br><br>";
 
 echo "Your User_Name<input type='text' value='$a' readonly>"; echo "<br><br>";
 
 echo "Your Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='text' value='$b' readonly><br><br>";
 
 echo "Your Password<input type='text' value='$c' readonly><br><br>";
  
 echo "</fieldset>";
}
}
}
echo "</table>";	
?>
