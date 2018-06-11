<style>

body,table{color: purple;background-color:#b5e7a0;}

td,tr,th{padding:6px;}

</style>

<ul class="navbar">
				<li><a href="form1.php"><font color='purple'>Home page</a></font></li>
						<li><a href="tickets.php"><font color='purple'>Check Tickets</a></font></li>
								<li><a href="pswdupdte.php"><font color='purple'>Reset Password</a></font></li>								
</ul>

<?php
session_start();
?>
<?php 
echo "<font color='purple'>";

include 'timedate.php';

echo "</font>";

include 'connect1.php';

$cx=$_SESSION['id'];echo "<br>
<div align='center'>
<marquee 
direction='left'
loop='15'
scrollamount='2'
     scrolldelay='2'
     behavior='alternate'
     width='70%'
     	 >
<font bgcolor='white'>Welcome To&nbsp;&nbsp;E-Ticketing Website</font>
</marquee>
</div>";

echo "<div style='position: absolute; top: 0; right: 0px; width: -40px; text-align:right;'>

			<font color='Crimson' size='4'>

				<u>Welcome Admin</u>"."&nbsp;"."&nbsp;"."&nbsp;".$_SESSION['id']."<br><br>

						<u>Click here to</u>&nbsp;&nbsp;&nbsp;<a href='logout1.php' title='Logout'>Logout</a></font></div>";
echo "<h2 style='text-align:center'><u>DELETE USER</u></h2>";

?>

<!DOCTYPE html5>
<html>
   <head>
   <title> My Reservation </title>
 <style>
 .footer {
	position:fixed;
   left: 0;
   bottom:-15;
   width: 70%;
   background-color:#b5e7a0;
   color:MEDIUMPURPLE;
   text-align: center;
}
 </style>
</head>
<body>
   <table width = "100%" border = "0">
   <tr>
		<td colspan = "2" bgcolor = "#86af49">
			<div align="center"><h1><u><i>Journey/Enquiry</i></u></h1></div></td></tr>
<tr valign = "top">
					<td  background color="#aaa" width="100"  >
						<b><Font size=4><table><div align="center"><u><i>Check Trains</i></u></div></font></b>
					</tr></td>
      <br />
			<table width= 800 border= 2 bgcolor= "lightblue" align= "center">
					<form name="res" action="res2.php" method="POST" autocomplete= "On">
		<tr>
							<td><u><i>TRAIN_NUMBER (optional)</u></i></td>
									<td><table style cellspacing=8 cellpadding=12 >
	<tr><tr>
										<input type= "number" name="TRAIN_NUMBER" placeholder="Train_No"/></table></td>
	</tr></tr></tr>
<td>
Source
<td>
<select name="src">
<option>--Source--</option>
<?php
/*   Sql Distinct used for Source */

include 'connect1.php';
$sql="select DISTINCT src from res ";
$res=mysqli_query($con,$sql);
     while($row=mysqli_fetch_array($res))
      {
         $source1=$row['src'];
         echo "<option value='$source1'>".$source1."</option>";
       }
?>
</select>
</td>
</td>
<tr> 
<td>
      Destination
<td>
     <select name="des" >
     <option >--Destination--</option>
     <?php
	 /*   Sql Distinct used for destination */
     include 'connect1.php';
     $sql="select distinct des from res";
     $res=mysqli_query($con,$sql);
     while($row=mysqli_fetch_array($res))
     {
       $des1=$row['des'];
       echo "<option value='$des1'>".$des1."</option>";
     }
?>
</select>
</td>
</td>
<tr>
<td>Date Of Journey :</td>
<td><table style cellspacing=8 cellpadding=12 >
<TR><tr>
<input type= "date" name="date" id="Date" placeholder= "DD/MM/YYYY"/></table></td>
<div class="column" style="background-color:lightblue">
        <tr>
</tr></tr></tr>
</div>
<tr>
<td>SUBMIT</td>
<td><input type= "Submit" name="Sub" value="SUBMIT"></td>
</tr>
<tr>
<td>CANCEL</td>
<td><input type= "Reset" name="Cancel" value="CANCEL"></td>
<input type="hidden" name="id">
</tr>
</form>
<div class="footer">
  <p><marquee>This is a dummy project. |All Rights Reserved. |@CopyRight 2018-2019</marquee></p>
     </div>
</body>
</html>
