<?php 
echo "<br><font color='white'>";
include 'timedate.php'; 
echo "</font>";
?>
<html>
<head>
<script>
function myFunction(x) {
    x.style.background = "LightGreen";
}
</script>
<style>
html, body {
  color: #ccc;
  background: #2D3945;
  font-family: Calibri;
}

.container {
  width: 360px;
  margin: 0 auto;
  padding: 5px 20px 0 20px;
  border: 2px solid #ccc;
  border-radius: 7px;
}

.container legend {
  color: #ccc;
  margin: 0 100px 0 280px;
  padding: 0;
  letter-spacing: 2px;
}

.wrapper {
  margin: 0 0 20px 0;
}

.hint {
  color: #888;
  margin: 0;
  font-size: 12px;
  text-align: justify;
}

.lbl-tb {
  font-size: 20px;
  text-transform: uppercase;
}

.frm-ctrl {
  color: #eee;
  background: transparent;
  margin: 10px 10px;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 3px;
  outline: none;
  font-family: Calibri;
}

.tb {
  width: 350px;
  font-size: 19px;
  color: #2D3945;
  background: #eee;
}

.btn {
  width: 360px;
  height: 40px;
  text-transform: uppercase;
  letter-spacing: 2px;
  cursor: pointer;
  transition: all 0.2s
}

.btn:hover {
  color: #2D3945;
  background: #eee;
}

.btn:active {
  border: 1px solid #333;
}
.footer {
position: fixed;
left:0;
bottom:-29;
width: 100%;
color: white;
text-align: center;
}
</style>
</head>
<body>
<div align="center">
<marquee 
 
     direction="left"
     loop="7"
     scrollamount="1"
     scrolldelay="2"
     behavior="alternate"
     width="60%"
     bgcolor="#2D3945" 
	 colour="green"
	 font-size="16px"
     >
<font bgcolor="white">Welcome To&nbsp;&nbsp;E-Ticketing Website</font>
</marquee>
</div>
<form name="f2" action="login2.php" method="POST">
<div class="wrapper" >
		<h2><u>Login With Username/Password</u></h2>
</div>
<fieldset class="container">
  <legend><i class="fa fa-empire fa-4x"></i></legend>
  
  <div class="wrapper">
    <label for="tbUnm" class="lbl-tb"><i class="fa fa-user fa-fw"></i> Username</label>
    <br />
	<input id="tbUnm" type="text" class="frm-ctrl tb" name="un" placeholder="User Name" spellcheck="false" autocomplete="off" onfocus="myFunction(this)"/>
    <p class="hint">Registered User Name</p>
  </div>
  
  <div class="wrapper">
    <label for="tbPwd1" class="lbl-tb"><i class="fa fa-unlock fa-fw"></i> Password</label>
    <br />
    <input id="tbPwd1" type="password" name="psw" placeholder="*****" class="frm-ctrl tb" onfocus="myFunction(this)"/>
    <p class="hint">Your Password</p>
  </div>
  
   <div class="wrapper">
    <input type="submit" name="submit" class="frm-ctrl btn" />
  </div>
 <font color="white">Trouble Logging? Try</font>
&nbsp;<a href="emaillogin.php"><font color="white">Email/Password</a></font><br /><br />
<div class="wrapper" >
Forget?<a href="u_res.php"><font color="white">Username</font></a> /<a href="getpswd.php"><font color="white">Password</font></a>
</div>
</fieldset>	
</form>			
</table>
<div class="footer">
  <p>
  <marquee
  direction="right"
     loop="7"
     scrollamount="1"
     scrolldelay="2"
     behavior="alternate"
     width="100%"
  >
  This is a dummy project. |All Rights Reserved. |@CopyRight 2018-2019
  </p>
  </marquee>
     </div>
</body>
</html>


