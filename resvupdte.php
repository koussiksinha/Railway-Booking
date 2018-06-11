<style>
th {padding:10px;}
</style>
		<?php
		session_start(); 
		?>

<?php
				include 'timedate.php'; 
				include 'connect1.php';$cx=$_SESSION['id'];

echo "<br/>
<div align='center'>
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
				  
				  echo "<a href='adm.php' class='active'><button>Admin Login Page</button></a>
				  <a href='adm1.php' class='inactive'><button>Admin Page</button></a>
				  <a href='resvdt.php' class='inactive'><button>Previous Page</button></a>";

				  echo "</div> <br/>";

  echo "<div style='position: absolute; top: 0; right: 0px; width: -40px; text-align:right;'>

			<font color='Crimson' size='4'>

				<u>Welcome Admin</u>"."&nbsp;"."&nbsp;"."&nbsp;".$_SESSION['id']."<br><br>

						<u>Click here to</u>&nbsp;&nbsp;&nbsp;<a href='logout1.php' title='Logout'>Logout</a></font></div>";

								echo "<br><br>";

							echo "<h2 style='text-align:center'><u>UPDATE DETAILS</u></h2>";

						@$upt=$_GET['PNR'];

									$s="Select * from rest where PNR='$upt'";

			if($result=mysqli_query($con,$s)){

							echo "<table style='width:100%' border='1'   bgcolor='#45B39D'>";

echo "<tr>";
					echo "<u>Reservation Details</u><br><br>";
								echo "<th width='6%'>PNR</th>";
										echo "<th width='6%'>TRAIN NUMBER</th>";
												
												echo "<th width='6%'>TRAIN NAME</th> ";
															
															echo "<th width='6%'> NAME</th> ";
														
														echo "<th width='6%'> AGE </th> ";
														
														echo"<th width='6%'>DOJ</th>";
														
														echo "<th width='6%'>SEAT</th> ";
									
									echo "<th width='6%'>SOURCE</th> ";
									
									echo "<th width='6%'>DESTINATION</th>";
									
									echo "<th width='6%'>CLASS RESERVED</th> ";
									
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
	    echo "<th width='6%'>" .$row['PNR']. "</th>" ;
	   echo "<th width='6%'>" .$row['Tr_Num']."</th>";
	   echo "<th width='6%'>" .$row['Train_Name']. "</th>";
	  echo "<th width='6%'>".$row['na']."</th>";
	  echo "<th width='6%'>".$row['age']."</th>";
	  echo "<th width='6%'>".$row['DOJ']."</th>";
	  echo "<th width='6%'>".$row['seat']."</th>";
	  echo "<th width='6%'>".$row['src']."</th>";
	  echo "<th width='6%'>".$row['des']."</th>";
	  echo "<th width='6%'>".$row['class']."</th>";
	  echo "</tr>";
  }
  echo "<tr>";
echo "</tr>";
echo "</table>"; 
}
else {
	echo "";
}
?>

<!DOCTYPE html5>
<html>
<head>
<style>
body {color: purple;background-color:#a79e84; }

h1{
	color:Red ;
	font- size :25px;
	font-family : Helvetica;
	}
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
<table align="left" width="20%" border="0"></table>
<div class="header">
<th colspan="2"><h1 align="center" ><strong><ul>UPDATE SOURCE && DESTINATION</ul></strong></h1>
</div>
<fieldset>
<p>
<font color="red"><label for="PNR"><u>PNR</u></label></font>
<input type="Text" name="pnr" style="background-color:#45B39D; color:white;" value="<?php echo $upt;?>" readonly>
</p>
<p>
<font color="red"><label for="TRAIN NUMBER"><u>TRAIN NUMBER</u></label></font>
<input type="Text" style="background-color:#45B39D; color:white;" value="<?php echo $a;?>" readonly>
</p>
<p>
<font color="red"><label for="TRAIN NAME"><u>TRAIN NAME</u></label></font>
<input type="Text" style="background-color:#45B39D; color:white;" value="<?php echo $b;?>" readonly>
</p>
<p>
<font color="red" size="5"><label for="Name"><u>NAME</u></label></font>
<input type="Text" name="na" style="background-color:#45B39D; color:white;" value="<?php echo $c;?>">
</p>
<p>
<font color="red" size="5"><label for="AGE"><u>AGE</u></label></font>
<input type="number"  name="age" style="background-color:#45B39D; color:white;" value="<?php echo $d;?>">
</p>
<p>
<font color="red" size="5"><label for="DOJ"><u>DATE OF JOURNEY</u></label></font> 
<input type="date"  name="date" style="background-color:#45B39D; color:white;" value="<?php echo $e;?>" >
</p>
<p>
<font color="red"><label for="SEAT"><u>SEAT</u></label></font> 
<input type="text" style="background-color:#45B39D; color:white;" value="<?php echo $f;?>" readonly>
</p>
<p>
<font color="red" size="5"><label for="SOURCE"><u>SOURCE</u></label></font> 
<input type="text" name="src" style="background-color:#45B39D; color:white;" value="<?php echo $g;?>">
</p>
<p>
<font color="red" size="5"><label for="DESTINATION"><u>DESTINATION</u></label></font> 
<input type="text" name="des" style="background-color:#45B39D; color:white;" value="<?php echo $h;?>">
</p>
<p>
<font color="red"><label for="CLASS RESERVED"><u>CLASS RESERVED</u></label></font> 
<input type="text" style="background-color:#45B39D; color:white;" value="<?php echo $i;?>" readonly>
</p>
<input type="submit" name="submit" style="background-color:#45B39D; color:white;" value="UPDATE"> 
<td><td><a href="resvdt.php"><button style="background-color:#45B39D; color:white;">BACK</button></a></td></td>
</fieldset>
</form>
</body>
</html>	
<?php
include 'connect1.php';
if (isset($_POST['submit'])) {
    $pnr = $_POST['pnr'];
    $g = $_POST['src'];
	 $dd = $_POST['des'];
    
$sql= "UPDATE rest SET src='$g', des='$dd' WHERE PNR='$pnr'";
$d=mysqli_query($con,$sql);
if($d){
    echo "Records were updated successfully.<a href='resvdt.php'>Link</a>";
} else {
    echo "ERROR: Could not able to execute";
}
}
?>
