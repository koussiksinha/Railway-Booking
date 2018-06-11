<style>
body{color: purple;background-color:aqua;}
th,td{padding:6px;}
.footer {
	position: fixed;
   left: 0;
   bottom:-15;
   width: 100%;
   background-color: #b5e7a0;
   color: khakhi;
   text-align: center;
}
</style>
<?php
session_start();
include 'connect1.php';include 'timedate.php';echo "<br><br>";
echo "<div align='right'><font color='blue'size='4'><u><i>Click here to</i></u></font>
<a href='logout.php' title='Logout'><th><td>Logout</a></td></th></div>";

?>
<?php
				/* Mysqli with Escape String Function and Preg Replace . */
				
if(isset($_POST['submit'])){
	
@$a=$_POST['uname'];$aa=addslashes($a);$aa=mysqli_real_escape_string($con,$_POST['uname']);

			$res = preg_replace("/[^a-zA-Z0-9\s]/", "", $a);
	
								@$b=$_POST['fname'];$bb=addslashes($b);@$bb=mysqli_real_escape_string($con,$_POST['fname']);

											$res1=preg_replace("/[^a-zA-Z]/", "", $b); 
			
														@$c=$_POST['lname'];$cc=addslashes($c);@$cc=mysqli_real_escape_string($con,$_POST['lname']);

												$res2=preg_replace("/[^a-zA-Z]/", "", $c);

							@$d=$_POST['email'];@$dd=mysqli_real_escape_string($con,$_POST['email']);

			@$e=mysqli_real_escape_string($con,$_POST['password']);

	@$f=mysqli_real_escape_string($con,$_POST['cpsw']);
 
$_Session['fname']=@$b;

$cx=$_Session['id']=$b;

$s=mysqli_query($con,"select * from test 
where uname='$a' and  password='$e' or  email='$d' ");

if (mysqli_num_rows($s)>0){
echo "<div align='center'><font size='6'><u>User Name/Email is in use.</u></font></div>";
echo "<div align='center'><font size='6'>Register with a different Username/Email<u><br />";
echo "<div align='center'><font size='6'>Redirecting in 3 secs.....</font></div>";			
		    header("refresh:3; url=form.php");
}

else if($e!=$f){
echo "Password Mismatch.Try again.";
echo "<div align='center'><font size='6'>Try again.....</font></div>";			
		    header("refresh:5; url=form.php");
}
else{
$sql=mysqli_query($con,"Insert into test (uname,fname,lname,email,password ) VALUES
		('$a','$b','$c','$d','$e')");
	
if($sql==1)	{
	echo "<div align='center'><font size='6'>Records saved successfully.Welcome ".$_Session['id']."</div></font>";
echo "<a href='view.php'>View Data</a>";
	}
else{
	echo "Error. Something went wrong";
}
}
}
?>

<div class="footer">
  <p><marquee>All Rights Reserved. |@CopyRight 2018-2019</marquee></p>
     </div>


  



