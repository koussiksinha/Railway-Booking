<style>
body{color: purple;background-color:aqua;}
th{padding:6px;}
.footer {
	position: fixed;
   left: 0;
   bottom:-15;
   width: 100%;
   background-color:aqua;
   color: Blue;
   text-align: center;
}
</style>
<div align="center">
<marquee 
 text-align="center"
     direction="left"
     loop="7"
     scrollamount="1"
     scrolldelay="2"
     behavior="alternate"
     width="100%"
     bgcolor="aqua" 
	      >
<font color="Blue">Welcome To&nbsp;&nbsp;E-Ticketing Website</font>
</marquee>
</div>
<ul class="navbar">
<li><a href="form.php">Home</a></li><br /><li><a href="res.php">Train Enquiry</a></li><br />
<li><a href="logout.php">Logout</a></li>
</ul>
<?php session_start(); ?>
<?php
include 'connect1.php';
include 'timedate.php';echo "<br><br>";$cx=$_SESSION['id'];
echo "<font size='4'><div align='right' style='float: right;'><u><i>Welcome</u>" ." "." ".$_SESSION['id'].
"</i></font></div>";
echo "<br><br>";

$al=$_GET['id'];

$s="select * from res where id='$al'";

$run=mysqli_query($con,$s);
$row=mysqli_fetch_array($run);
$y=$row['id'];
$k=$row['TRAIN_NUMBER'];
$l=$row['Tr_name'];
$src=$row['src'];
   $des=$row['des'];
   $d=$row['date'];   
?>
<!DOCTYPE html5>
<html>
<head>

<script>
function validateform(){

var a=document.f1.na.value;
var b=document.f1.age.value;
var d=document.f1.seat.value;
var g= document.f1.class.value;


if (a==""||b==""||d==""||g==""){
	alert("Fields blank");
	return false;
}

if (b<=5 || b>125){ 

alert("Age must be within 5-125 yrs");
	
     return false; 
} 

else {
	return true;
}

}
</script>
<style>
table, th{
    
	padding:5px;
}
</style>
</head>
<body bgcolor= "aqua">
<form name="f1"  action="book2.php" method="POST" autocomplete="On" onSUBMIT="return validateform()">
	 <h1><bgcolor="aqua">Enter Passenger Details</h1>
    <table style="width:100%" border="1" bgcolor= "Aqua">
			<tr>
			<th>S.NO</th>
			<th>Train Number</th>
			<th>Train Name</th>
			
							 <th>NAME</th>
			                 <th><b>AGE</b></th>
							<th>DOJ</th>
							<th>SELECT BERTH</th>
							<th> STARTING    </th>	 
							<th>TO </th>
			<th>CLASS</th>
					  </tr>
		   <tr>
		    <th>
			1
		     </th>
		 	   <th>
			   <?php echo $k; ?>
				</th>
				<input type="hidden" name="trnum" value="<?php echo $k ;?>">	
				<th>
			   <?php echo $l; ?>
				</th>
				<input type="hidden" name="trn" value="<?php echo $l ;?>">			  
<th colspan= "auto"><input id="text" name="na" placeholder ="Complete Name" ></th>
<th><input type="number" name="age"  placeholder =" AGE "/></th>
<th><?php echo $d ;?></th>
<input type="hidden" name="date" value="<?php echo $d ;?>">
   <th><select name="seat">              
         <option value="">NONE  </option>
    <option value="Lower Berth">Lower Berth</option>
    <option value="Middle Berth">Middle Berth</option>
    <option value="Upper Berth">Upper Berth</option>
    <option value="SU">Side Upper</option>
    <option value="SL">Side Lower</option>
     </select></th>

   <th><?php echo $src;?></th>
<input type="hidden" name="src" value="<?php echo $src;?>">
	
  <th><?php echo $des;?></th>
<input type="hidden" name="des" value="<?php echo $des ;?>">
  <th><select name="class" >              
         <option value="">NONE  </option>
    <option value="AC I">  AC I &nbsp;&nbsp;&nbsp;&nbsp;  </option>
    <option value="AC II">AC II  </option>
    <option value="AC III">AC III    </option>
    <option value="Sleeper Class">Sleeper Class</option>   		
    </th>
   <tr>
    <th>
	2
   </th>
		 	   <th>
			   <?php echo $k; ?>
				</th>
				<input type="hidden" name="trnum1" value="<?php echo $k ;?>">	
				<th>
			   <?php echo $l; ?>
			   <input type="hidden" name="trn1" value="<?php echo $l ;?>">
				</th>
				<th><input id="text" name="na1" placeholder =" Complete Name " ></th>
				<th><input type="number" name="age1"  placeholder =" AGE " /></th>
				<th><?php echo $d;?></th>
				<input type="hidden" name="date1" value="<?php echo $d ;?>">
				
				<th>            
			<select name="seat1">
			<option value="">NONE  </option>
			<option value="Lower Berth">  Lower Berth</option>
			<option value="Middle Berth">Middle Berth   </option>
			<option value="Upper Berth">Upper Berth    </option>
			<option value="Side Upper">Side Upper</option>
			<option value="Side Lower">Side Lower</option>
             </select>
			 </th>
			<th><?php echo $src; ?></th>
			<input type="hidden" name="src_1" value="<?php echo $src;?>">
			
			<th><?php echo $des; ?></th>
		<input type="hidden" name="des1" value="<?php echo $des;?>">
			
			<th><select name="class1">              
         <option value="">NONE</option>
		<option value="AC I">  AC I</option>
		<option value="AC II">AC II  </option>
		<option value="AC III">AC III    </option>
		<option value="Sleeper Class">Sleeper Class</option>
		</select></th>	
		
<br />
</table> 
<tr>		
<th>LOGIN&nbsp;&nbsp;</th> 
<th><input type="submit" name="submit" value="SUBMIT"></th>


<th>CANCEL</td>
<th><input type="reset" name="RESET" value="CANCEL"></th>
</tr>

<input type="hidden" name="id" >

</form>
</body>
<input type="hidden" name="DOJ">
<input type="hidden" name="src1">
<div class="footer">
<p><marquee
text-align="center"
     direction="left"
     loop="7"
     scrollamount="1"
     scrolldelay="2"
     behavior="alternate"
     width="100%"
     bgcolor="aqua"  
 
>
This is a dummy project. |All Rights Reserved. |@CopyRight 2018-2019</marquee></p>
     </div>
</html>
