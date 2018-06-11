<?php 
session_start();
?>
<?php
echo "<font color='#6200EE'>";
include 'timedate.php'; 
echo "</font>";
echo "<div align='center'>
<marquee 
 
     direction='left'
     loop='7'
     scrollamount='2'
     scrolldelay='2'
     behavior='alternate'
     width='100%'
     colour='green'
	 font-size='16px'
     >
<font color='#008080'>Welcome To&nbsp;&nbsp;E-Ticketing Website</font>
</marquee>
</div>";
include 'connect1.php';
echo "<br><br>";
$cx=$_SESSION['id'];
echo "<div align='right'><font color='#008080'size='4'><u>Welcome Admin</u>"."&nbsp;"."&nbsp;".$_SESSION['id']."</font></div>"."<br>";			
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background-color:#c0c0c0;
}

.topnav {
  overflow: hidden;
  background-color:#018786;
}
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}
.topnav a:hover {
  background-color: #4CAF50;
  color: black;
}
.active {
  background-color: #4CAF50;
  color: white;
}
.topnav .icon {
  display: none;
  color: #4CAF50;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}
.center {
    margin: auto;
    width: 20%;
    border: 0px solid #73AD21;
    padding: 10px;font-size: 27px;
}
@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}
.footer {
	position:fixed;
   left: 0;
   bottom:-15;
   width: 100%;
   background-color:#018786;
   color:#E3E4FA;
   text-align: center;
}
</style>
</head>
<body>
<div align="right">
<a href="logout1.php" title="Logout"><font color="#008080" size= "4">Logout</font></a>
</div>

		<div class="topnav" id="myTopnav">
				<a href="adm.php" class="inactive">Home</a>
					<a href="userdt.php" onclick="myFunc()">User</a>
						<a href="resvdt.php">Passenger Details</a>
							<a href="trndt.php">Trains</a>
								<a href="#about">About</a>
			<a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
		</div>

<div class="center">
  <h2><u><font color="Crimson">Admin&nbsp;&nbsp;Section</font></u></h2>
</div>

<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>
<table style="width:100%" border="1">
		<form name="ad1" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"], ENT_QUOTES, "utf-8"); ?>" method="POST">

		<div class="left">
<h2><font color="#6200EE">User</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="userdt.php">Registeration</a></h2>
<h2><font color="#6200EE">Passenger</font>&nbsp;&nbsp;&nbsp;&nbsp;<a href= "resvdt.php">Booking</a></h2>
<h2><font color="#6200EE">Click</font>&nbsp;&nbsp;<font color="#6200EE">For</font>&nbsp;&nbsp;&nbsp;&nbsp;<a href="trndt.php">Train Info</a></h2>
</div>

<div class="footer">
  <p><marquee direction="right"
     loop="7"
     scrollamount="1"
     scrolldelay="2"
     behavior="alternate"
     width="100%">This is a dummy project. |All Rights Reserved. |@CopyRight 2018-2019</marquee></p>
     </div>
</form>
</table>
</body>
</html>




