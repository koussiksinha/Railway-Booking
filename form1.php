<?php
session_start();
include 'connect1.php';	
echo "<font color='#4040a1'>";			
include 'timedate.php';
echo "</font>";
echo "<br>";echo "<br>";
?>
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
<font color="#4040a1">Welcome To&nbsp;&nbsp;E-Ticketing Website</font>
</marquee>
</div>
<?php
			if(isset($_POST['submit'])){
		@$aa=$_POST['un'];
        @$b=$_POST['psw'];	
        $cx=$_SESSION['id']=$aa;
		@$d=$_POST['remember_me'];
		
		if(isset($_POST['remember_me'])){ 
        $twoDays = 60 * 60 * 24 * 2 + time();
        setcookie('un', $aa, $twoDays);
        setcookie('psw', $b, $twoDays);
    } else { 
        $twoDaysBack = time() - 60 * 60 * 24 * 2;
        setcookie('un', '', $twoDaysBack);
        setcookie('psw', '', $twoDaysBack);
    }
}
if(!empty($_POST['un'])||!empty($_POST['psw'])){

$q = mysqli_query($con,"select uname,password from test where uname='$aa' and password='$b'");		

$numrows = mysqli_num_rows($q);		
    
if ($numrows!=0){
	
while ($row=mysqli_fetch_assoc($q)){
	@$x="";
	@$y="";
	$x=$row['uname'];
	$z=$row['password'];
echo "<u><i>Welcome User!!</u></i>"." "." "." "." "." ".$cx;
echo "<br><br><br>";
	echo "<font color='white'><a href='res.php'>SEARCH FOR TRAINS</a></font>";	
    	}
}
else{
      echo "<font color='white'>Incorrect Username/Password!</font>";
	  echo "<div align='center'><font size='6'><font color='white'>Redirecting in 5 secs.....</font></font></div>";			
		    header("refresh:5; url=form1.php");
  }		
}

?>				
<html>
<head>
<link rel="stylesheet" type="text/css" href="style1.css">
<style>
.footer
{
position: absolute;
left:0;
bottom:-10;
width: 100%;
text-align: center;
background-color:#cab577;
}
</style>
</head>
<body>
<form name="f2" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"], ENT_QUOTES, "utf-8"); ?>" method="POST">    
 <table >
 <div class="w3-container w3-red" id="container">
			<h2><u>Already Registered? Enter User_Name</u></h2>
		</div>
		<div class="center" >
	<u><i><font color="#4040a1">UserName</font></u></i>&nbsp;&nbsp;<input type="text" name="un" placeholder="Enter UserName" value="<?php if(isset($_COOKIE['un'])) echo $_COOKIE['un']; ?>"/>
	</div>
	<br />
	<div class="center" >
	<u><i><font color="#4040a1">Password</u></i>&nbsp;&nbsp;<input type="password" name="psw" placeholder="*******" value="<?php if(isset($_COOKIE['psw'])) echo $_COOKIE['psw']; ?>"/></font>
	</div><br/>
	<div class="center" >
	<input type="checkbox" id="remember_me" name="remember_me" <?php if(isset($_COOKIE['un'])){echo "checked='checked'"; } ?> value="1" /> <label for="remember_me"><font color="#4040a1">Remember Me</font></label>
	</div><br/>
	<div class="center">
	<input type="Submit" name="submit" value="Login">
	<a href="getpswd.php" class="btn btn-link">Forget?Password</a>
	</div>
	<div class="left">
	<br/><br/>
<font color="#4f3222">First time user.</font>Click&nbsp;&nbsp;<a href="form.php" class="btn btn-link">Here</a>
	</div>
				</form>
			</table>
      <div class="footer">
<p>
<marquee
direction="right"
     loop="7"
     scrollamount="1"
     scrolldelay="0.5"
     behavior="alternate"
     width="100%"
>
<font color="#4040a1">This is a dummy project. |All Rights Reserved.|@CopyRight 2018-2019.</font>
  </marquee>
  </p>
  </div>
</body>
</html>	