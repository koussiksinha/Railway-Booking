<?php
session_start();
?>
<?php
echo "<br><font color='white'>";
include 'timedate.php'; 
echo "</font>";
include 'connect1.php';
?>
<style>
body {
  font-family: Arial;
  
  background-color: lightblue;
}
 .footer {
	position: fixed;
   left: 0;
   bottom:-10;
   width: 100%;
   background-color:lightblue;
   color: blue;
   text-align: center;
}
 </style>
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
 <div class="footer">
  <p><marquee>This is a dummy project. |All Rights Reserved. |@CopyRight 2018-2019</marquee></p>
     </div>

<?php
echo "<ul class='navbar'>";
echo "<li><a href='form.php'>Home</a></li><br /><li><a href='logout.php'>LOGOUT</a></li>";
echo "</ul>";

@$aa=$_POST['uname'];$_SESSION['uname']=$aa;
@$cx=$_SESSION['id']=$aa;
@$bb= $_POST['password']; 
echo "<i><u><font size='6'><div align='right'>Welcome</i>"." "." "." "." ".$_SESSION['uname']."</div></font></u>";
echo "<br /><br>";

$sql="select * from test where uname='$aa' and password='$bb'";

if($res=mysqli_query($con,$sql)){

while($row = mysqli_fetch_array($res)){
$a=$row['email'];$b=$row['uname'];$c=$row['fname'];$d=$row['lname'];


echo "<fieldset>";echo "<legend><font size='5'> Your Details</font></legend> <br>";

/* Values are readonly.*/

echo "EMAIL&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='text' value='$a' readonly><br>"; 
echo "<br>";
						echo "USER NAME<input type='text' value='$b' readonly><br>";
	echo "<br>";					
								echo "FIRST NAME<input type='text' value='$c' readonly><br>";
echo "<br>";
									echo "LAST NAME<input type='text' value='$d' readonly>";
echo "</fieldset>";

echo "You may now proceed with your login.\n";echo "<br><br>";echo "<a href='login.php'><button>Now Login</button></a>";	  
} 
}
$result1=mysqli_query($con,"select * from test where uname='$aa' and password='$bb'");
$duplicate=mysqli_num_rows($result1);
   if($duplicate==0){
	   echo "<table>";
	   echo "<br /><font color='Purple'><u><i>SORRY!! WE DON'T HAVE YOUR RECORDS.</u></i></font><br /><br />";
	   echo "</table>";
	   echo "<a href='login.php'> Go Back & Login</a><br /><br />";
echo "<a href='e_res.php'> TRY ONCE MORE</a>";
   }else{
   }     


?>