<?php 
echo "<br><font color='white'>";
include 'timedate.php'; 
echo "</font>";
?>
<!DOCTYPE html5>
<html>
<head>
<script>
function myFunction(x) {
    x.style.background = "LightSeaGreen";
}
</script>
<link rel="stylesheet" type="text/css" href="style4.css">
<style>
.footer{
	position:fixed;
	left: 0;
	bottom:-10;
     width: 100%;
     color: #ccc;background:#2D3945;
   text-align: center; 
}
</style>
</head>
<body >
<div align="center">
<marquee 
direction="left"
loop="7"
scrollamount="2"
     scrolldelay="2"
     behavior="alternate"
     width="70%"
     bgcolor="#2D3945" 
	 >
<font bgcolor="white">Welcome To&nbsp;&nbsp;E-Ticketing Website</font>
</marquee>
</div>
<div class="header">
<h2><u>Login</u></h2>
</div>					
<form action="login3.php" method="POST">
<fieldset class="container">
  <legend><i class="fa fa-empire fa-4x"></i></legend>

  <div class="wrapper">
    <label for="tbEmail" class="lbl-tb"><i class="fa fa-envelope-o fa-fw"></i> Email</label>
    <br />
    <input id="tbEmail" type="text" class="frm-ctrl tb" name="em" placeholder="mail@example.com" spellcheck="false" autocomplete="off" onfocus="myFunction(this)"/>
    <p class="hint">Your Registered Email </p>
  </div>
  
  <div class="wrapper">
    <label for="tbPwd1" class="lbl-tb"><i class="fa fa-unlock fa-fw"></i> Password</label>
    <br />
    <input id="tbPwd1" type="password" name="pswd" placeholder="*****" class="frm-ctrl tb" onfocus="myFunction(this)"/>
    <p class="hint">Your Password</p>
  </div>
  
   <div class="wrapper">
    <input type="submit" name="submit"   class="frm-ctrl btn" />
  </div>
  Forget?&nbsp;&nbsp;<a href="e_res.php"><font color="white">Email</font></a>&nbsp;&nbsp;
Or&nbsp;&nbsp;&nbsp;&nbsp;<a href="getpswd.php"><font color="white">Password</font></a>
</fieldset>
</form>	
</table>
</body>
<div class="footer">

<marquee 
direction="right"
     loop="7"
     scrollamount="1"
     scrolldelay="2"
     behavior="alternate"
     width="100%"
	 >
<font bgcolor="#2D3945"><p>This is a dummy project. |All Rights Reserved. |@CopyRight 2018-2019</p></font>

</marquee>
</div>
</html>