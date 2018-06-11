<style>
th {padding:5px;}
</style>
<?php
session_start(); 
?>

<?php
include 'timedate.php'; 
include 'connect1.php';$cx=$_SESSION['id'];
echo "<br/><div align='center'>
<marquee 
direction='left'
loop='15'
scrollamount='2'
     scrolldelay='2'
     behavior='alternate'
     width='70%'
     	 >
<font bgcolor='white'>Welcome To&nbsp;&nbsp;Admin Page</font>
</marquee>
</div>";

echo "<div class='left'>";
  echo "<a href='adm.php' class='active'><button><font color='Crimson'size='4'>Admin Login Page</font></button></a>
<a href='adm1.php' class='inactive'><button><font color='Crimson'size='4'>Admin Page</font></button></a>
<font color='Crimson'size='4'><a href='resvdt.php' class='inactive'><button><font color='Crimson'size='4'>Previous Page</font></button></a>";
echo "</div>";

echo "<div style='position: absolute; top: 0; right: 0px; width: -40px; text-align:right;'>

			<font color='Crimson' size='4'>

				<u>Welcome Admin</u>"."&nbsp;"."&nbsp;"."&nbsp;".$_SESSION['id']."<br><br>

						<u>Click here to</u>&nbsp;&nbsp;&nbsp;<a href='logout1.php' title='Logout'>Logout</a></font></div>";

echo "<br><br>";

echo "<h2 style='text-align:center'><u><font color='Crimson' size='5'>Delete Passenger</font></u></h2>";

@$upt=$_GET['PNR'];

$s="Select * from rest where PNR='$upt'";

if($result=mysqli_query($con,$s)){

echo "<table style='width:100%' border='1' 'rowspan='10'  bgcolor='#45B39D'>";

echo "<tr>";
			echo "<u><b>Passenger Details</b></u><br><br>";
                echo "<th >PNR</th>";
				echo "<th>TRAIN NUMBER</th>";
				echo "<th>TRAIN NAME</th> ";
				echo "<th> NAME</th> ";
				echo "<th> AGE </th> ";
				echo"<th>DOJ</th>";
				echo "<th>SEAT</th> ";
				echo "<th>SOURCE</th> ";
				echo "<th>DESTINATION</th>";
				echo "<th>CLASS RESERVED</th> ";
				echo"</tr>";
while($row = mysqli_fetch_array($result)){
	   $a=$row['Tr_Num'];
	  $b=$row['Train_Name'];
	  $c=$row['na'];
	  $d=$row['age'];
	  $e=$row['DOJ'];
	  $f=$row['seat'];
	  $g=$row['src'];
	  $h=$row['des'];
	  $i=$row['class'];
      echo "<tr>";
	    echo "<th>" .$row['PNR']. "</th>" ;
	   echo "<th>" .$row['Tr_Num']."</th>";
	   echo "<th>" .$row['Train_Name']. "</th>";
	  echo "<th>".$row['na']."</th>";
	  echo "<th>".$row['age']."</th>";
	  echo "<th>".$row['DOJ']."</th>";
	  echo "<th>".$row['seat']."</th>";
	  echo "<th>".$row['src']."</th>";
	  echo "<th>".$row['des']."</th>";
	  echo "<th>".$row['class']."</th>";
	  echo "</tr>";echo "</table>"; 
  }
}
else {
	echo "";
}
?>
<!DOCTYPE html5>
<html>
<head>
<style>
body {color: purple;background-color:SILVER; }
label,p{padding:10px;}	 
</style>
</head>
<body>
<br><br/>
<tr>
<td></td>
<td colspan="2" rowspan="2"></td>
</tr>
<table CELLPADDING="4" cellspacing="10"></table>
<form name="form" action ="" method="POST" >

<table align="left" width="20%" border="0" background-color:"#45B39D"></table>
<hr>
<div class="header">
<th colspan="2"><h2 align="center"><strong><ul><font color="#5D6D7E">Delete Passenger</font></ul></strong></h2>
</div>

<fieldset>

<p>
<font color="#5D6D7E"><label for="PNR"><u>PNR</u></label></font>
<input type="Text" name="pnr" style="background-color:#D5D8DC; color:#1B4F72;"  value="<?php echo $upt;?>" readonly>
</p>

<p>
<font color="#5D6D7E"><label for="TRAIN NUMBER"><u>TRAIN NUMBER</u></label></font>
<input type="Text" style="background-color:#D5D8DC; color:#1B4F72;" value="<?php echo $a;?>" readonly>
</p>

<p>
<font color="#5D6D7E"><label for="TRAIN NAME"><u>TRAIN NAME</u></label></font>
<input type="Text" style="background-color:#D5D8DC; color:#1B4F72;" value="<?php echo $b;?>" readonly>
</p>

<p>
<font color="#5D6D7E" size="5"><label for="Name"><u>NAME</u></label></font>
<input type="Text" name="na" style="background-color:#D5D8DC; color:#1B4F72;" value="<?php echo $c;?>">
</p>

<p>
<font color="#5D6D7E" size="5"><label for="AGE"><u>AGE</u></label></font>
<input type="number"  name="age" style="background-color:#D5D8DC; color:#1B4F72;" value="<?php echo $d;?>">
</p>

<p>
<font color="#5D6D7E" size="5"><label for="DOJ"><u>DATE OF JOURNEY</u></label></font> 
<input type="date"  name="date" style="background-color:#D5D8DC; color:#1B4F72;" value="<?php echo $e;?>" >
</p>

<p>
<font color="#5D6D7E" size="5"><label for="SEAT"><u>SEAT</u></label></font> 
<input type="text" style="background-color:#D5D8DC; color:#1B4F72;" value="<?php echo $f;?>" readonly>
</p>

<p>
<font color="#5D6D7E" size="5"><label for="SOURCE"><u>SOURCE</u></label></font> 
<input type="text" name="src" style="background-color:#D5D8DC; color:#1B4F72;" value="<?php echo $g;?>">
</p>

<p>
<font color="#5D6D7E" size="5"><label for="DESTINATION"><u>DESTINATION</u></label></font> 
<input type="text" name="des" style="background-color:#D5D8DC; color:#1B4F72;" value="<?php echo $h;?>">
</p>

<p>
<font color="#5D6D7E"><label for="CLASS RESERVED"><u>CLASS RESERVED</u></label></font> 
<input type="text" style="background-color:#D5D8DC; color:#1B4F72;" value="<?php echo $i;?>" readonly>
</p>
<input type="submit" name="submit" value="DELETE"> 
</fieldset>
</form>
</body>
</html>	
<?php
include 'connect1.php';
if (isset($_POST['submit'])) {
    $pnr = $_POST['pnr'];
    //$g = $_POST['src'];
	 //$dd = $_POST['des'];
    //$udcontent = $_POST['udcontent'];
$sql= "Delete from rest  WHERE PNR='$pnr'";
$d=mysqli_query($con,$sql);
if($d){
    echo "Records were deleted successfully.<a href='resvdt.php'>Link</a>";
} else {
    echo "ERROR: Could not able to execute";
}
}
?>
