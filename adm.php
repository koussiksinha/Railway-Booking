<?php
session_start();
echo "<font color='#c0c0c0'>";
include 'timedate.php';
echo "<font>";
include 'connect1.php';
echo "<br><br>";
?>	
<?php
			if(isset($_POST['submit'])){
		@$aa=$_POST['un'];
        @$b=$_POST['psw'];
$cx=$_SESSION['id']=$aa;
//$_SESSION['em']=$cc;		
	if(!empty($_POST['un'])||!empty($_POST['psw'])){
$q = mysqli_query($con,"select uname,password from test where uname='$aa' and password='$b'");		
$numrows = mysqli_num_rows($q);		
if ($numrows!=0){
	while ($row=mysqli_fetch_assoc($q)){
	@$x="";
	@$y="";
	$x=$row['uname'];
	$z=$row['password'];
echo "<u><i>Welcome User!!</u></i>"."&nbsp;"."&nbsp;".$cx;
echo "<br><br>";
	echo "<a href='adm1.php'><font color='#c0c0c0'>PROCEED</font></a>";	
    	}
}
else{
      echo "Incorrect username/Password!";
  
}		
}
}
?>
<!DOCTYPE html5 >
<html>
    <head>
        <title>Login to admin</title>
		<style>
		body {
	font-size: 120%;
	background:#610345;
}
.header {
	width: 50%;
	margin: 5px auto 0px;
	color: white;
	background:#c0c0c0;
	text-align: center;
	border: 0.5px solid #B0C4DE;
	border-bottom: none;
	border-radius: 20px ;
	padding: 10px;
}
label{
background:#094545;
}
legend{
background:#094545;
}

     </style>
    </head>
    <body>
	<div class="header">
	<h2><font color="Red"><u>WELCOME</u>&nbsp;&nbsp;&nbsp;&nbsp;<u>ADMIN</u></font></h2>
</div>

        <form name="f3" action="adm.php" method="post">
            <fieldset>
                <legend>Enter Username</legend>
                    <p>
                        <label for="username"><u>Username:</u></label>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="un" id="un" placeholder="Enter Username" />
                    </p>
                    <p>
                        <label for="password"><u>Password:</u></label>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="psw" id="psw" placeholder="******"/>
                    </p>
                    
            </fieldset>
            <p>
                <input type="submit" name="submit" value="Submit" /> <input type="reset" value="Reset" />
			            </p>
						</form>
			
                </body>
</html>