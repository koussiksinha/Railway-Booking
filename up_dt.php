<?php 
session_start(); 
?>
<?php
include 'connect1.php';include 'timedate.php';
@$upp=$_GET['id'];
@$l=$_POST['id'];
@$b=$_POST['uname'];
@$c=$_POST['fname'];
@$d=$_POST['lname'];
@$e=$_POST['email'];
@$f=$_POST['password'];
$s="select * from test where id='$upp'";

$run=mysqli_query($con,$s);
while($row= mysqli_fetch_array($run)){
//$l=$row['id'];
$b=$row['uname'];
   $c=$row['fname'];
   $d=$row['lname'];
   $e=$row['email'];
   $f=$row['password'];
   }
?>


<!DOCTYPE html>
<html>
<head>
<style>
.input-group label {
	display: block;
	text-align: left;
	margin: 3px;
}
.input-group input {
	height: 20px;
	width: 93%;
	padding: 5px 5px;
	font-size: 16px;
	border-radius: 5px;
	border: 1px solid gray;
}
div
  {
    text-align:left;
  }

body {
	font-size: 120%;
	background: Aqua;
}
.header {
	width: 50%;
	margin: 5px auto 0px;
	color: white;
	background: #5F9EA0;
	text-align: center;
	border: 0.5px solid #B0C4DE;
	border-bottom: none;
	border-radius: 20px ;
	padding: 5px;
}  
.footer {
	position: fixed;
   left: 0;
   bottom:-25;
   width: 100%;
   background-color: #f44336;
   color: white;
   text-align: center;
}	 
</style>
</head>
<body>
<?php 
echo "<br><br>";$cx=$_SESSION['id'];
echo "<u>Welcome"." "." "." "." ".$_SESSION['id']."</u>"."<br><br>";
?>
<tr>
<td colspan="2" rowspan="2"></td>
</tr>
<table CELLPADDING="4" cellspacing="10"></table>
<form name="form" action ="up_dt.php?id=<?php echo $upp;?> " method="POST" >

<table>
<fieldset>
<legend><font size="4"><strong><u>UPDATE YOUR NAME && PASSWORD</u></strong></font></legend>
</tr>

<p>
<div class="input-group">
<label><font color="red">ID</font></label>
<input type="Text" name="id" value="<?php echo $upp;?>" readonly>
</div>
</p>
<p>
<div class="input-group">
<label><font color="red">User Name</font></label>
<input type="Text" name="uname" value="<?php echo $b;?>" readonly>
</div>
</p>

<p>
<div class="input-group">
<label><font color="red"><b>First name</b></font></label>
<input type="Text" name="fname"  value="<?php echo $c;?>">
</div>
</p>

<p>
<div class="input-group">
<label><font color="red"><b> Last Name</b></font></label>
<input type="Text" name="lname" value="<?php echo $d;?>" >
</div>
</p>

<p>
<div class="input-group">
<label><font color="red"><b>Email</b></font></label>
<input type="email" name="email" value="<?php echo $e;?>" readonly>
</div>
</p>

<p>
<div class="input-group">
<label><font color="red"><b>Password</b></font></label>
<input type="Password" name="password" value="<?php echo $f;?>" >
</div>
</p>
<p>

<td><td><input type="submit" name="update" value="UPDATE"></td></td>
<td><td><button><a href="login.php">Continue Login</a></button></td></td>
</fieldset>

</table>
</form>
</body>

</html>	
<?php
include 'connect1.php';
if(isset($_POST['update'])){
@$c=$_POST['fname'];
@$d=$_POST['lname'];
$fx=$_POST['password'];


		/* Check Password fields are not empty and  entered password equals 
		confirm password */
		
if(!empty($_POST['password']) || !empty($_POST['fname']) || !empty($_POST['lname'])){
	
$sql= "UPDATE test set fname='$c',lname='$d', password='$fx' where id='$l'";

$d=mysqli_query($con,$sql);
if($d){
	
    echo "Records were updated successfully";
}

 else {
		echo "ERROR: Could not able to execute";
		}
}
else {
	echo "Fields are blank ";
}
}

?>	
