<?php
session_start(); 

echo "<br><font color='white'>";
include 'timedate.php'; 
echo "</font>";

echo "<br><br>";

$cx=$_SESSION['id'];

echo "<div align='right'; vertical-align='top';><font color='Crimson'size='4'><u>Welcome Admin</u></font></div>"."<div align=right><font color='Crimson'size='4'>".$_SESSION['id']."</font></div>"."<br><br>";

echo "<div align='right'><a href='logout1.php' title='Logout'><button>Logout</a></button></div>";

echo "<a href='adm.php' class='active'><button>Admin Login Page</button></a>
  
<a href='adm1.php' class='inactive'><button>Admin Page</button></a><br><br></div>
  
<a href='trndt.php' class='inactive'><button>
Previous Page</td></button></a><br><br></div>";

?>
<!DOCTYPE html>
<html>
<head>
<style>

body,h1 {color: purple;background-color:#438D80; }
.header h1 {
  position: relative;
  top: 18px;
  left: 10px;
}
.btn {
  background-color:silver;
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  font-size: 16px;
  margin: 4px 2px;
  opacity: 0.6;
  transition: 0.3s;
}

.btn:hover {
background-color:#663399;
}
</style>
<script>
function myFunction(x) {
    x.style.background = "purple";
}
</script>
</script>
</head>
<br/><br/>
<form name="f1" action=""  method="POST" >
<table style="width:50%" border="1" align="center">
<div class="header">
<h1><u> ADD MORE TRAINS</u></h1>
</div>
<br/><br />
<tr>
<td>TRAIN NUMBER</td><td><input type="text" name="trnum" id="TrNum" style="width:100%" onfocus="myFunction(this)"/></td>
</tr>
<tr>
<td>TRAIN NAME</td><td><input type="text" name="trname" id="TrName" style="width:100%" onfocus="myFunction(this)"/></td>
</tr>
<tr>
<td>SOURCE</td>
<td><input type="text" name="src" id="src" style="width:100%" onfocus="myFunction(this)"/></td>
</tr>
<tr>
<td>DESTINATION</td>
<td><input type="text" name="des" id="des" style="width:100%" onfocus="myFunction(this)"/></td>
</tr>
<tr>
<td>DATE</td><td><input type="date" name="date" id="date" style="width:100%" onfocus="myFunction(this)"/></td>
</tr>
<tr>
<td>AC I (Tkts)</td><td><input type="text" name="ACI" id="ACI" style="width:100%" onfocus="myFunction(this)"/></td>
</tr>
<tr>
<td>FARE</td><td><input type="text" name="fare1" id="FARE" style="width:100%" onfocus="myFunction(this)"/></td>
</tr>
<tr>
<td>BOOKED </td><td><input type="text" name="book" id="book" style="width:100%" onfocus="myFunction(this)"/></td>
</tr>
<tr>
<td>BALANCE</td><td><input type="text" name="bal" id="bal" style="width:100%" onfocus="myFunction(this)"/></td>
</tr>
<tr>
<td>AC II (Tkts)</td><td><input type="text" name="ACII" id="ACII" style="width:100%" onfocus="myFunction(this)"/></td>
</tr>
<tr>
<td>FARE</td><td><input type="text" name="fare2" id="FARE" style="width:100%" onfocus="myFunction(this)"/></td>
</tr>
<tr>
<td>BOOKED </td><td><input type="text" name="book1" id="book1" style="width:100%" onfocus="myFunction(this)"/></td>
</tr>
<tr>
<td>BALANCE</td><td><input type="text" name="bal1" id="bal1" style="width:100%" onfocus="myFunction(this)"/></td>
</tr>
<tr>
<td>AC III(Tkts) </td><td><input type="text" name="ACIII" id="ACIII" style="width:100%" onfocus="myFunction(this)"/></td>
</tr>
<tr>
<td>FARE </td><td><input type="text" name="fare3" id="FARE" style="width:100%" onfocus="myFunction(this)"/></td>
</tr>
<tr>
<td>BOOKED </td><td><input type="text" name="book2" id="book2" style="width:100%" onfocus="myFunction(this)"/></td>
</tr>
<tr>
<td>BALANCE </td><td><input type="text" name="bal2" id="bal2" style="width:100%" onfocus="myFunction(this)"/></td>
</tr>
<tr>
<td>SLEEPER(Tkts)</td><td><input type="text" name="slpr" id="slpr" style="width:100%" onfocus="myFunction(this)"/></td>
</tr>
<tr>
<td>FARE </td><td><input type="text" name="fare4" id="FARE" style="width:100%" onfocus="myFunction(this)"/></td>
</tr>
<tr>
<td>BOOKED </td><td><input type="text" name="book3" id="book3" style="width:100%" onfocus="myFunction(this)"/></td>
</tr>
<tr>
<td>BALANCE </td><td><input type="text" name="bal3" id="bal3" style="width:100%"onfocus="myFunction(this)"/></td>
</tr>
<tr>

</tr>
</table>
<td><input type= "button" class="btn" name="submit" value="Add Trains"></td>
</form>
</html>


<?php 
include 'connect1.php';

@$trnum=mysqli_real_escape_string($con,$_POST['trnum']);

@$trname=mysqli_real_escape_string($con,$_POST['trname']);

@$a=mysqli_real_escape_string($con,$_POST['src']);

@$b=mysqli_real_escape_string($con,$_POST['des']);@$date=mysqli_real_escape_string($con,$_POST['date']);@$c=mysqli_real_escape_string($con,$_POST['ACI']);

@$d=mysqli_real_escape_string($con,$_POST['fare1']);@$dd=mysqli_real_escape_string($con,$_POST['book']);@$dx=mysqli_real_escape_string($con,$_POST['bal']);

@$e=mysqli_real_escape_string($con,$_POST['ACII']);@$f=mysqli_real_escape_string($con,$_POST['fare2']);@$ff=mysqli_real_escape_string($con,$_POST['book1']);@$fx=mysqli_real_escape_string($con,$_POST['bal1']);

@$g=mysqli_real_escape_string($con,$_POST['ACIII']);@$h=mysqli_real_escape_string($con,$_POST['fare3']);@$hh=mysqli_real_escape_string($con,$_POST['book2']);@$hx=mysqli_real_escape_string($con,$_POST['bal2']);

@$i=mysqli_real_escape_string($con,$_POST['slpr']);@$j=mysqli_real_escape_string($con,$_POST['fare4']);@$ii=mysqli_real_escape_string($con,$_POST['book3']);@$ix=mysqli_real_escape_string($con,$_POST['bal3']);

/*Check if fields are not empty.*/


if(isset($_POST['submit'])){	
if(!empty($_POST['trnum']) || !empty($_POST['trname']) || !empty($_POST['src']) 
	
|| !empty($_POST['des']) || !empty($_POST['date']) || !empty($_POST['ACI'])	

|| !empty($_POST['fare1']) || !empty($_POST['book']) || !empty($_POST['bal'])

|| !empty($_POST['ACII']) || !empty($_POST['fare2']) || !empty($_POST['book1'])

|| !empty($_POST['bal1']) || !empty($_POST['ACIII']) || !empty($_POST['fare3'])

      ||!empty($_POST['book2']) || !empty($_POST['bal2']) || !empty($_POST['slpr'])

    ||!empty($_POST['fare4']) || !empty($_POST['book3']) || !empty($_POST['bal3'])){
	
$sql=   "insert into res (TRAIN_NUMBER,Tr_name,src,des,date,AC_I,

           book,bal,FIRST_AC,AC_II,book1,bal1,SEC_AC,AC_III,
		   
		   book2,bal2,THIRD_AC,SL,book3,bal3,SL_CLASS) 

	values ('$trnum','$trname','$a','$b','$date','$c','$dd','$dx','$d',

							'$e','$ff','$fx','$f','$g','$hh','$hx','$h','$i','$ii','$ix','$j')";

$res=mysqli_query($con, $sql);

echo mysqli_error($con);	
if ($res) {
	echo "<button><a href='adm1.php'>BACK TO MAIN PAGE</a></button>";
echo"<br><br>";
               echo "New record created successfully";	
            }	
else {
	echo "Insertion failed";
     }

}
else        {
               echo "Fields are empty!!!"; 
			}
}
	


?>