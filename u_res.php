<?php 
session_start();
echo "<br><font color='crimson'>";
include 'timedate.php'; 
echo "</font>";
include 'connect1.php';
echo "<br>
<div align='center'>
<marquee 
direction='left'
loop='15'
scrollamount='2'
     scrolldelay='2'
     behavior='alternate'
     width='70%'
     	 >
<font color='crimson'>Welcome To&nbsp;&nbsp;E-Ticketing Website</font>
</marquee>
</div>";
?>
<style>
body,table{color: purple;background-color:MEDIUMAQUAMARINE;}
td,tr,th{padding:6px;}
.header {
	width: 50%;
	margin: 5px auto 0px;
	color: white;
	background: #5F9EA0;
	text-align: center;
	border: 0.5px solid #B0C4DE;
	border-bottom: none;
	border-radius: 20px ;
	padding: 10px;
}
wrapper { min-height: 100%;position: relative;
}
.content {
    /* padding the footer adds 40 to footer height */
    padding-bottom: 140px;
}
.footer {
	position: fixed;
   left: 0;
   bottom:-10;
   width: 100%;
   background-color:MEDIUMAQUAMARINE;
   color:crimson;
   text-align: center;
}
</style>
<?php
echo "<div align='left'><ul class='navbar'>";
echo "<a href='form.php'>Home</a><br /><br /><a href='logout.php'>Logout</a>";
echo "</ul></div>";
?>
<!DOCTYPE HTML5>
<html>
<head>
<title>Get User Name</title>
</head>
<body>
<script>
function validateform(){

var a=document.f1.email.value;

var b=document.f1.password.value;

if(a==""||b==""){
     alert("Empty fields are not allowed"); 
      return false;   
} 
else{  
     return true;  
	} 
}
</script>
<body>
<table align="center">
<form name= "f1"  action=""  method="POST" onSUBMIT="return validateform()">
<div class="header">
<b><legend><u><i>Get User_Name</i></u></legend></b>
</div>
<tr>
<td>Email:</td>
<td><input type="email" name="email" placeholder="Enter Email"  ></td>
</tr>
<tr>
<td>Password</td>
<td><input type ="password" name="password" placeholder="*******" ></td>
</tr>
<tr>
<td>SUBMIT <input type="submit" name ="submit" value="SUBMIT"  ></td><br/><br />
</tr>
<tr>
<td>CANCEL<input type="RESET" name="reset" value="CANCEL"></td> </br/>
</tr>
</form>
</table>
<div class="footer">
<p><marquee>This is a dummy project. |All Rights Reserved. |@CopyRight 2018-2019</marquee></p>
 </div>
<?php
				/*MySqli Stripslashes && MySqli Real Escape String.*/
				
if(isset($_POST['submit']) && isset($_POST['email']) || isset($_POST['password'])){
	
if(!empty($_POST['email'])  && !empty($_POST['password'])){	

$a=$_POST['email'];$aa=stripcslashes($a);$aa=mysqli_real_escape_string($con,$a);

$b=$_POST['password'];$bb=stripcslashes($b);$bb=mysqli_real_escape_string($con,$b);  

$aa=$_POST['fname']; $cc=stripcslashes($aa);$cc=mysqli_real_escape_string($con,$aa);

$_SESSION['email']=$a;

echo "<br><br>";

$sql=mysqli_query($con,"select uname,fname,lname from test where email='$a' and password='$b'");

$res_check=mysqli_num_rows($sql);

if($res_check>0){
$row=mysqli_fetch_assoc($sql);
@$aa=$row['fname'];
@$bb=$row['uname'];
@$cc=$row['lname'];
echo "<div class='header'>
<b><legend><u><i>Display Info</i></u></legend></b>
</div>";
echo "<div style='position: absolute; top: 0; right: 0px; width: -40px; text-align:right;'>
<font color='crimson'>Welcome"." "." ".$_SESSION['email']."</div></font>
<fieldset>";

echo "<p><font color= '#9400D3'>First Name</font></p>
<input type='text' value='$aa' readonly >
<p><font color= '#9400D3'>Last Name</font></p>";
echo "<input type='text' value='$cc' readonly>
<p><font color= '#9400D3'>User_Name</font></p>
<input type='text' value='$bb' readonly>
<p><font color= '#9400D3'>Email</font></p>
<input type='text' value='$a' readonly ><a href='login.php'> Login Now </a></fieldset>
<br><br>";   
}
else{
echo "<br><br><font color='Purple'><u><i>SORRY!! WE DON'T HAVE YOUR RECORDS.</u></i></font><br /><br />";
}
}
}
?>
</body>
</html>
