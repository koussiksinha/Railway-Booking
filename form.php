<?php
session_start();
echo "<font color='white'>";
include 'timedate.php'; 
echo "</font>";
?>
<!DOCTYPE html5>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style6.css">
</head>
<body>
<script>
function validateform(){
var a=document.form.password.value;
var b=document.form.cpsw.value;

if(a=="" || b==""){
   alert("Empty password field's are not allowed"); 
   return false;   
}  
  else if(a.length>50){
	  alert("More then 6 character's. Not allowed")
  } 
  else if(b.length>36){
	  alert("More then 6 character's. Not allowed");
  }
   else{  
      return true;  
	} 

}
</script>
<body>
<div align="right">
<a href="adm.php"><font color="white">ADMIN ONLY</a><br/><br /></font>
</div>
<div align="center">
<marquee 
 
     direction="left"
     loop="7"
     scrollamount="1"
     scrolldelay="2"
     behavior="alternate"
     width="100%"
     colour="green"
	 font-size="16px"
     >
<font color="white">Welcome To&nbsp;&nbsp;E-Ticketing Website</font>
</marquee>
</div>
<form name="form" action ="form2.php" method="POST" onSubmit="return validateform()" class="w3-container">
<table >
<br>
<div align="header" >
<h2><font color="white"><u>Registration Form</u></font></h2>
</div>

<fieldset class="container">
  <legend><i class="fa fa-empire fa-4x"></i></legend>
  
  <div class="wrapper">
    <label for="tbUnm" class="lbl-tb"><i class="fa fa-user fa-fw"></i> Username</label>
    <br />
    <input id="tbUnm" type="text" class="frm-ctrl tb" placeholder="User Name" name="uname" spellcheck="false" autocomplete="off" />
    <p class="hint">This name will be your unique identity . Please don't repeat any old username.</p>
  </div>
  
  <div class="wrapper">
    <label for="tbFname" class="lbl-tb"><i class="fa fa-user fa-fw"></i> First Name</label>
    <br />
    <input id="tbUnm" type="text" class="frm-ctrl tb" name="fname" spellcheck="false" autocomplete="off" />
    <p class="hint">Your First Name</p>
  </div>
  
  <div class="wrapper">
    <label for="tbLname" class="lbl-tb"><i class="fa fa-user fa-fw"></i> Last Name</label>
    <br />
    <input id="tbUnm" type="text" class="frm-ctrl tb" name="lname" spellcheck="false" autocomplete="off" />
    <p class="hint">Your Last Name</p>
  </div>
  
  <div class="wrapper">
    <label for="tbEmail" class="lbl-tb"><i class="fa fa-envelope-o fa-fw"></i> Email</label>
    <br />
    <input id="tbEmail" type="text" class="frm-ctrl tb" name="email" placeholder="mail@example.com" spellcheck="false" autocomplete="off" />
    <p class="hint">Keep this unique as well.</p>
  </div>
  
  <div class="wrapper">
    <label for="tbPwd1" class="lbl-tb"><i class="fa fa-unlock fa-fw"></i> Password</label>
    <br />
    <input id="tbPwd1" type="password" name="password" placeholder="*****" class="frm-ctrl tb" />
    <p class="hint">Your Password</p>
  </div>
  
  <div class="wrapper">
    <label for="tbPwd2" class="lbl-tb"><i class="fa fa-unlock fa-fw"></i> Confirm password</label>
    <br />
    <input id="tbPwd2" type="password" name="cpsw" placeholder="*****" class="frm-ctrl tb" />
    <p class="hint">Repeat the above password</p>
  </div>
  <div class="wrapper">
    <input type="submit" name="submit"   class="frm-ctrl btn" />
  </div>
  <p>
Already a member?<a href="login.php"><font color="White">Login</font></a>
</p>
</fieldset>

</form>
</table>
</body>
</html>

