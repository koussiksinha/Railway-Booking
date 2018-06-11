<?php       session_start();   ?>
<?php 
echo "<br><font color='white'>";
include 'timedate.php'; 
echo "</font>";

echo "<ul class='navbar'>";

echo "<li><a href='form.php'>Home</a></li><br /><li><a href='logout.php'>Logout</a></li>";
echo "</ul>";

$cx=$_SESSION['id'];

echo "<i><div align='right'><font size='6'><u>Welcome</font></i>"." "." "." "." ".$_SESSION['id']."</div></u><br>";
echo "<br/>";
?>

<!DOCTYPE HTML5>
<html>
<head>
<title>Reset Email</title>
<style>
 .footer {
	position: fixed;
   left: 0;
   bottom:-10;
   width: 100%;
   background-color:lightblue;
   color:blue;
   text-align: center;
}
body{color: purple;background-color:lightblue;}

th{padding:6px;}
 </style>
<script>

function validateform(){

var a=document.f1.uname.value;
var b=document.f1.password.value;
   if(a=="" ||b="")
   alert("Empty fields are not allowed"); 
   
   return false;   
} 
 else{  
     return true;  
	} 
}
</script>
</head>
<body>
<div align="center">
<marquee 
 
     direction="left"
     loop="7"
     scrollamount="1"
     scrolldelay="2"
     behavior="alternate"
     width="100%"
     bgcolor="lightblue" 
	 colour="blue"
	 font-size="16px"
     >
<font bgcolor="white">Welcome To&nbsp;&nbsp;E-Ticketing Website</font>
</marquee>
</div>
<table valign="top">
		<form name= "f1"  action="e_res1.php"  method="POST" onSUBMIT="return validateform()">
<fieldset>
<br/>
<legend><font size="6"><u>Get Email-Id</font></u></legend>
Username
<input type ="text" name="uname" placeholder="Enter Username" >
<br/><br/>

Password&nbsp;
<input type ="password" name="password" placeholder="*******" ><br/>
<br/>

SUBMIT <input type="submit" name ="submit" value="SUBMIT"><br />


CANCEL<input type="RESET" name="reset" value="CANCEL"></br/>
</fieldset>
<div class="footer">
  <p><marquee>This is a dummy project. |All Rights Reserved. |@CopyRight 2018-2019</marquee></p>
     </div>
</form>
</table>
</body>
</html>



