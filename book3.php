<?php
session_start();
echo "<font color='#FAD7A0'>";			
include 'timedate.php';
echo "</font>";
include 'connect1.php';
echo "<div align='center'>
<marquee 
 text-align='center'
     direction='left'
     loop='7'
     scrollamount='1'
     scrolldelay='2'
     behavior='alternate'
     width='70%'
     bgcolor='#4B7E7D' 
	      >
<font color='#FAD7A0'>Welcome To&nbsp;&nbsp;E-Ticketing Website</font>
</marquee>
</div>";
$cx=$_SESSION['id'];

echo "<div style='position: absolute; top: 0; right: 0px; width: -40px; text-align:right;'>

			<font color='#FAD7A0' size='4'>

				<u>Welcome </u>"."&nbsp;"."&nbsp;"."&nbsp;".$_SESSION['id']."<br><br>

						<u>Click here to</u>&nbsp;&nbsp;&nbsp;<a href='logout1.php' title='Logout'>Logout</a></font></div>";
echo "<a href='form1.php'><font size='5' color='#FAD7A0'>Home Page</font></a><br><br>";
?>
<style>
body{color: purple;background-color:#4B7E7D;}
th{padding:6px;}
.footer {
	position: fixed;
   left: 0;
   bottom:-15;
   width: 100%;
   background-color:#4B7E7D;
   color:#FAD7A0;
   text-align: center;
}
</style>
<?php
echo "<form name='f1'  action='book3.php' method='POST' ><body><table>
<tr>
<font color='#FAD7A0'>ENTER PNR:</font>
</tr>
<td>
<input type='text' name='pnr' placeholder='Enter PNR'>
</td>
<tr>
<td><input type='submit' name='submit' Value='Get Tickets'></td>
</tr>
</form></body></table><br /><br /><br />";
$fa="";
$pnr=$_POST['pnr'];
if(isset($_POST['submit']) && !empty($_POST['pnr'])){
$result1=mysqli_query($con,"SELECT * FROM rest where PNR='$pnr'");
	$duplicate=mysqli_num_rows($result1);
   if($duplicate==0){
	   echo "<table>";
	   echo "<font color='#FAD7A0'>PNR NOT FOUND</font>";
	   echo "</table>";
   }
else {   
$sql= "SELECT rest.PNR, res.TRAIN_NUMBER, res.Tr_name, rest.na, rest.age, 

rest.doj, rest.seat, rest.src, rest.des, rest.class, 
CASE 
WHEN rest.class =  'AC I' THEN res.FIRST_AC
WHEN rest.class =  'AC II' THEN res.SEC_AC
WHEN rest.class =  'AC III' THEN res.THIRD_AC
WHEN rest.class =  'Sleeper Class' THEN res.SL_CLASS  END 
AS fare  FROM res, rest
WHERE rest.Tr_Num = res.TRAIN_NUMBER  AND PNR ='$pnr'  ORDER BY PNR
LIMIT 0 , 30
";

$res=mysqli_query($con,$sql);	

echo "<u><b><font color='#FAD7A0'>YOUR TICKETS</font></u></b><br><br>";
 
 while($row= mysqli_fetch_array($res))
 {
	 $pnr=$row['PNR'];
	 $k=$row['TRAIN_NUMBER'];
	 $tr=$row['Tr_name'];
$b=$row['na'];$c=$row['age'];
      $d=$row['seat'];
	  $fa=$row['fare'];
   $g=$row['class'];
   $e=$row['src'];
   $f=$row['des'];
   $h=$row['doj']; 
echo "<table style='width:100%' border='1' bgcolor='white'>
<tr>
<td><u><font size='4'>PNR</u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$pnr</td></font> 
<td><u>Train Name</u>&nbsp;&nbsp;$tr</td> 
<td><u>Train Number</u>&nbsp;&nbsp;$k</td> 
<td><u>Name</u>&nbsp;&nbsp;$b</td>
<td><u>Age</u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$c</td>
<td><u> Seat</u>&nbsp;&nbsp;$d</td>
<td><u>Berth</u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$g</td> 
<td><u>FARE</u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$fa</td>
<td><u>DOJ</u>&nbsp;&nbsp;$h</td>
<td><u>Source</u>&nbsp;&nbsp;$e</td>
<td><u>Destination</u>&nbsp;&nbsp;$f</td>
</tr></table></font><br><br><font color='#FAD7A0'>Your Ticket Price Rs "." "." ".$fa."</font><br>"; 
}
}
}
echo "<br>
<button><a href='res.php'>Book More Tickets</a></button>";
?>
<div class="footer">
  <p><marquee 
text-align="center"
     direction="left"
     loop="7"
     scrollamount="1"
     scrolldelay="2"
     behavior="alternate"
     width="100%"
     bgcolor="#4B7E7D"  
  >
This is a dummy project. |All Rights Reserved. |@CopyRight 2018-2019</marquee></p>
     </div>
