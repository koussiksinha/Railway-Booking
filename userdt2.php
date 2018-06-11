<?php
session_start(); 
?>
<?php
include 'timedate.php'; echo "<br>";include 'connect1.php';
echo "<div class='Top'>";
			echo "<button><a href='adm.php' class='active'>Admin Login Page </a></button>";
				
				echo "<button><a href='adm1.php' class='inactive'>Admin Page</a></button>";
						
						echo "<button><a href='userdt.php'>Previous Page</a></button><br /><br />";
 echo "</div> <br/>";
 $cx=$_SESSION['id'];
echo "<div style='position: absolute; top: 0; right: 0px; width: -40px; text-align:right;'>

			<font color='Crimson' size='4'>

				<u>Welcome Admin</u>"."&nbsp;"."&nbsp;"."&nbsp;".$_SESSION['id']."<br><br>

						<u>Click here to</u>&nbsp;&nbsp;&nbsp;<a href='logout1.php' title='Logout'>Logout</a></font></div>";
echo "<h2 style='text-align:center'><u>DELETE USER</u></h2>";
$upp=$_GET['id'];
$l=$_POST['id'];
$b=$_POST['uname'];
$c=$_POST['fname'];
$d=$_POST['lname'];
$e=$_POST['email'];
$f=$_POST['password'];

$s="select * from test where id='$upp'";
$run=mysqli_query($con,$s);
while($row= mysqli_fetch_array($run)){
$l=$row['id'];
$b=$row['uname'];
   $c=$row['fname'];
   $d=$row['lname'];
   $e=$row['email'];
   $f=$row['password'];
     echo "<table style='width:100%' border='1' 'rowspan='10'  bgcolor='#999999'>
<tr>";
			    echo "<th>ID</th>
				<th>USER_NAME</th>
              <th>FIRST_NAME(update)</th>
                <th>LAST_NAME(update)</th>
                <th>EMAIL</th><th>PASSWORD</th>
				
</tr>";
echo "<tr>";				
	  $l=$row['id'];
	$x=$row['password'];$f=$row['password'];
	  echo "<th width='9%'>" .$row['id']. "</th>" ;
	  echo "<th width='9%'>" .$b. "</th>";
	  echo "<th width='9%'>".$row['fname']."</th>";
	  echo "<th width='9%'>".$row['lname']."</th>";
	  echo "<th width='9%'>".$row['email']."</th>";
	  echo"<style>
	input[type='password'],textarea {
			background-color:#999999; color:purple;}
  </style>";
	  echo "<th width='9%'>"."<input type='password' style=background-color='#999999;' value='$x'>"."</th>";
echo "</tr>";
	  	}
echo "</table>";  
?>
<!DOCTYPE html>
<html>
<head>
<style>
body {color: purple;background-color:#FA8072; }
h1{
	color:white ;
	font- size :25px;
	font-family : Helvetica;
	}
}	 
</style>
</head>
<body>
<br><br/>
<tr>
<td></td>
<td colspan="2" rowspan="2"></td>
</tr>
<table CELLPADDING="4" cellspacing="10" background="TEAL"></table>
<form name="form" action="userdt1.php?=$upp" method="POST" >
<table align="left" width="20%" border="0"></table>
<div class="header">
<th colspan="2"><h2 align="center" ><strong><u>DELETE USER</u></strong></h2>
</div>
<fieldset>
<p>
<font color="PURPLE"><label for="User Name"><u>ID</u></label></font>
<input type="Text" name="id" style="background-color:#999999; color:white;"  value="<?php echo $l;?>" readonly>
</p>
<p>
<font color="PURPLE"><label for="User Name"><u>User Name</u></label></font>
<input type="Text" name="uname" style="background-color:#999999; color:white;" value="<?php echo $b;?>" readonly>
</p>
<p>
<font color="PURPLE"><label for="First Name"><u>First name </u></label></font>
<input type="Text" name="fname"  style="background-color:#999999; color:white;" value="<?php echo $c;?>">
</p>
<p>
<font color="PURPLE"><label for="Last Name"><u> Last Name</u></label></font>
<input type="Text" name="lname" style="background-color:#999999; color:white;" value="<?php echo $d;?>">
</p>
<p>
<font color="PURPLE"><label for="email"><u>Email</u></label></font>
<input type="email" name="email" style="background-color:#999999; color:white;" value="<?php echo $e;?>" readonly>
</p>
<p>
<font color="PURPLE"><label for="password"><u>Password</u></label></font> 
<input type="password" name="password" style="background-color:#999999; color:white;" value="<?php echo $f;?>" readonly >
</p>
<td><td><input type="submit" name="submit" value="DELETE"></td></td>

</fieldset>
</form>
</body>
</html>
<?php
include 'connect1.php';
	if(isset($_POST['submit'])){
			$c=$_POST['fname'];
				$d=$_POST['lname'];
	$sql= "DELETE from test where id='$l'";
				$d=mysqli_query($con,$sql);
		if($d){
	
    			echo "Records were deleted successfully";
				echo "<div align='center'><font size='6'>Redirecting in 2 secs.....</font></div>";
					header("refresh:2; url=userdt.php");	

			}
 else {
    echo "ERROR: Could not able to execute";
echo "<div align='center'><font size='6'>Redirecting you back.....</font></div>";
	header("refresh:2; url=userdt.php");
	}
}
?>
