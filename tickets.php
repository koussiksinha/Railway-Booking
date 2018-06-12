<?php
session_start();
include 'connect1.php'; 
?>
<html>
   <head>
   <title> MY TICKETS </title>
   <style>body {
  font-family: Arial;
  
  background-color: lightblue;
}
 .footer {
	position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color:lightblue;
   color: Red;
   text-align: center;
}
</style>
</head>
<ul class="navbar">
<li><a href="form.php">Home Page</a></li><br />
</ul>

<table width = "100%" border = "0">
   <tr>
   <td colspan = "2" bgcolor="lightblue">
   <center>
   <h4 ><u><i><font color="MAROON">TICKET SEARCH</font></u></i></h4>
   </center>
   </td>
   </tr>
<form name="f1" method="POST" action="">
<body> 
<td align="center" bgcolor="lightblue"><u><i>SEARCH BY PNR</i></u></td>
<td align= "left" bgcolor = "lightblue"><input type= "text" name="pnr" placeholder="ENTER PNR NO."></td>
<tr><br /><br />
<td align= "center" bgcolor = "AQUA"><u>SUBMIT</u></td>
<input type= "hidden" name="uname">
<td align= "left" bgcolor = "AQUA"><font ="6"><input type= "Submit" name="Submit" value="SUBMIT"></font></td>
</tr>
<div class="footer">
  <marquee 
direction="left"
loop="15"
scrollamount="2"
     scrolldelay='2'
     behavior="alternate"
     width="100%"
     	 >
<p>This is a dummy project. |All Rights Reserved. |@CopyRight 2018-2019</p>
</marquee>
     </div>
<?php
$cx=$_SESSION['id'];

echo "
<div align='center'>
<marquee direction='left'
loop='15' scrollamount='2'
scrolldelay='2'
behavior='alternate'
width='100%'
>
<font color='crimson'>Welcome To&nbsp;&nbsp;E-Ticketing Website</font>
</marquee>
</div>";
echo "<div style='position: absolute; top: 0; right: 0px; width: -40px; text-align:right;'>

			<font color='Crimson' size='4'>

				<u>Welcome</u>"."&nbsp;"."&nbsp;"."&nbsp;".$_SESSION['id']."<br><br>

						<u>Click here to</u>&nbsp;&nbsp;&nbsp;<a href='logout.php' title='Logout'>Logout</a></font></div>";
@$Pnr=$_POST['pnr'];
if(isset($_POST['Submit'])){
if(!empty($_POST['pnr'])){
	$result1=mysqli_query($con,"SELECT * FROM rest where PNR='$Pnr'");
	$duplicate=mysqli_num_rows($result1);
   if($duplicate==0){
	   echo "<table>";
	   echo "<font color='Red'>PNR NOT FOUND</font>";
	   echo "</table>";
   }else{
   }
   $result=mysqli_query($con,"SELECT * FROM rest where PNR='$Pnr'");
while($row = mysqli_fetch_array($result)) {
	// Print out the contents of each row into a table
	echo "<table border='1' width= 900 align='center' color='lime'>";
echo "<align='center'><u>TICKETS</u></align>";
echo "<br><br>";
echo "<tr><th>PNR</th><th>TRAIN NO.</th><th>TRAIN NAME</th><th>NAME</th><th>AGE</th><th>DOJ</th><th>SEATS</th><th>SOURCE</th><th>DESTINATION</th><th>BERTH</th></tr>";	
	echo "<td>".$row['PNR']."</td>"; 
	echo "<td>".$row['Tr_Num']."</td>"; 
	echo "<td>".$row['Train_Name']."</td>";
	echo "<td>".$row['na']."</td>";
	echo "<td>".$row['age']."</td>";
	echo "<td>".$row['DOJ']."</td>";
	echo "<td>".$row['seat']."</td>";
	echo "<td>".$row['src']."</td>";
	echo "<td>".$row['des']."</td>";
	echo "<td>".$row['class']."</td>";
	echo "</table>";
}
}
}
?>
</form>
</body>
</table>
</head>
</html>
