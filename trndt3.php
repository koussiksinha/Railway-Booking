<?php
session_start();
?>
<?php
echo "<br><font color='white'>";
include 'timedate.php'; 
echo "</font>";
include 'connect1.php';
echo "<br><a href='adm.php' class='active'><button>Admin Login Page</button></a>
  
<a href='adm1.php' class='inactive'><button>Admin Page</button></a><br><br></div>
  
<a href='trndt.php' class='inactive'><button>Previous Page</button></a><br><br></div>";
  
echo "<div align='right'><font color='Crimson' size='4'><u>Welcome Admin</u>&nbsp;&nbsp;&nbsp;".$_SESSION['id']."</font><br>

<a href='logout.php'><font color='Crimson' size='4'>Logout</a></font></div>";

@$upp=$_GET['id'];

$s="select * from res where id='$upp'";    /* SQLI SELECT QUERY. */

$run=mysqli_query($con,$s);
//$row= mysql_fetch_assoc($run);  /* MySqli FETCH. */

$row=mysqli_fetch_array($run);  
      $l=$row['id'];
	  $a=$row['TRAIN_NUMBER'];
	  $b=$row['Tr_name'];
	  $c=$row['src'];
	  $d=$row['des'];
	  $e=$row['date'];
	  $f=$row['AC_I'];
	  $g=$row['FIRST_AC'];$gg=$row['book'];$gx=$row['bal'];
	  $h=$row['AC_II'];
	  $i=$row['SEC_AC'];$ii=$row['book1'];$ix=$row['bal1'];
	  $j=$row['AC_III'];
	  $k=$row['THIRD_AC'];$kk=$row['book2'];$kx=$row['bal2'];
	  $n=$row['SL'];
	  $m=$row['SL_CLASS'];$mm=$row['book3'];$mx=$row['bal3']; 
	   
?>
<!DOCTYPE html>
<html>
<head>
<style>
body {color: purple;background-color:aqua; }

h1{
	color:Red ;
	font- size :25px;
	font-family : Helvetica;
	}
}	 
</style>
</head>
<body>
<br><br/>
<?php 
//$cx=$_SESSION['id'];
//echo "Welcome"." "." "." "." ".$_SESSION['id'];
?>
<tr>
<td></td>
<td colspan="2" rowspan="2"></td>
</tr>
<table CELLPADDING="4" cellspacing="10"></table>
<form name="form" action ="trndt1.php?id=<?php echo $l ;?>" method="POST" >

<table align="left" width="20%" border="0"></table>
<div class="header">
<th colspan="2"><h1 align="center" ><strong><u>DELETE TRAIN DETAILS</u></strong> </h1>
</div>

<fieldset>
<p><tr>
<td><font color="red"><label for="ID"><u>ID</u></label></font></td>
<td><input type="Text" name="id" value="<?php echo $l;?>" readonly></td>
</p></tr>

<p><tr>
<td><font color="red"><label for="TRAIN NUMBER"><u>TRAIN NUMBER</u></label></font></td>
<td><input type="Text" name="trnum" value="<?php echo $a;?>"></td>
</p></tr>

<p>
<font color="red"><label for="TRAIN NAME"><u>TRAIN NAME</u></label></font>
<input type="Text" name= "trname" value="<?php echo $b;?>" >
</p>

<p>
<font color="red"><label for="SOURCE"><u>SOURCE</u></label></font> 
<input type="text" name= "src" value="<?php echo $c;?>">
</p>
<p>
<font color="red"><label for="DESTINATION"><u>DESTINATION</u></label></font> 
<input type="text" name= "des" value="<?php echo $d;?>">
</p>

<p>
<font color="red"><label for="DOJ"><u>DATE OF JOURNEY</u></label></font> 
<input type="text" name= "date"  value="<?php echo $e;?>" >
</p>

<p>
<font color="red"><label for="AC I"><u>AC I</u></label></font> 
<input type="text" name= "ACI" value="<?php echo $f;?>">
</p>

<p>
<font color="red"><label for="FARE"><u>FARE</u></label></font> 
<input type="text" name= "fare1" value="<?php echo $g;?>">
</p>

<p>
<font color="red"><label for="Tickets Booked"><u>Tickets Booked</u></label></font> 
<input type="text" name= "book" value="<?php echo $gg;?>" readonly >
</p>

<p>
<font color="red"><label for="Balance Tickets"><u>Balance Tickets</u></label></font> 
<input type="text" name= "bal"  value="<?php echo $gx;?>" readonly >
</p>

<p>
<font color="red"><label for="AC II"><u>AC II</u></label></font> 
<input type="text" name= "ACII" value="<?php echo $h;?>">
</p>

<p>
<font color="red"><label for="FARE"><u>FARE</u></label></font> 
<input type="text" name= "fare2" value="<?php echo $i;?>">
</p>

<p>
<font color="red"><label for="Tickets Booked"><u>Tickets Booked</u></label></font> 
<input type="text" name= "book1" value="<?php echo $ii;?>" readonly/>
</p>

<p>
<font color="red"><label for="Balance Tickets"><u>Balance Tickets</u></label></font> 
<input type="text" name= "bal1" value="<?php echo $ix;?>"  readonly/>
</p>

<p>
<font color="red"><label for="AC III"><u>AC III</u></label></font> 
<input type="text" name= "ACIII" value="<?php echo $j;?>">
</p>

<p>
<font color="red"><label for="FARE"><u>FARE</u></label></font> 
<input type="text" name= "fare3" value="<?php echo $k;?>">
</p>

<p>
<font color="red"><label for="Tickets Booked"><u>Tickets Booked</u></label></font> 
<input type="text" name= "book2" value="<?php echo $kk;?>" readonly/>
</p>

<p>
<font color="red"><label for="Balance Tickets"><u>Balance Tickets</u></label></font> 
<input type="text" name= "bal2" value="<?php echo $kx;?>" readonly/>
</p>

<p>
<font color="red"><label for="SLEEPER"><u>SLEEPER</u></label></font> 
<input type="text" name= "slpr" value="<?php echo $n;?>">
</p>

<p>
<font color="red"><label for="FARE"><u>FARE</u></label></font> 
<input type="text" name= "fare4" value="<?php echo $m;?>">
</p>

<p>
<font color="red"><label for="Tickets Booked"><u>Tickets Booked</u></label></font> 
<input type="text" name= "book3" value="<?php echo $mm;?>" readonly/>
</p>

<p>
<font color="red"><label for="Balance Tickets"><u>Balance Tickets</u></label></font> 
<input type="text" name= "bal3" value="<?php echo $mx;?>" readonly/>
</p>

<td><td><input type="submit" name="submit" value="Delete"></td></td>
<td><td><button><a href="trndt.php">CHECK </a></button></td></td>
</fieldset>
</form>
</body>
</html>	

<?php
include 'connect1.php';
	@$upp=$_GET['id'];
	@$ck= $_POST['trnum'];
	@$trname=$_POST['trname'];
	@$aa=$_POST['src'];
	@$bb=$_POST['des'];
	@$ddate=$_POST['date'];
	@$cc=$_POST['ACI']; 
	@$ds=$_POST['fare1'];
	@$es=$_POST['ACII'];
	@$fc=$_POST['fare2'];
	@$gs=$_POST['ACIII'];
	@$hc=$_POST['fare3'];
	@$is=$_POST['slpr'];
	@$jc=$_POST['fare4'];


if(isset($_POST['submit'])){
	
$sql= (" Delete from res where id='$upp'");
$d=mysqli_query($con,$sql);
if($d){
	
    echo "Records were deleted successfully";
echo "<div align='center'><font size='6'>Redirecting in 2 secs.....</font></div>";
	header("refresh:2; url=trndt.php");
}
 else {
    echo "ERROR: Could not able to execute";
echo "<div align='center'><font size='6'>Redirecting in 2 secs.....</font></div>";
	header("refresh:2; url=trndt.php");	
}
}
?>	














