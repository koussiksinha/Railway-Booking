<style>
th {padding:10px;}
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background-color:#b5e7a0;
}
.footer {
	position: fixed;
   left: 0;
   bottom:-15;
   width: 100%;
   background-color:#86af49;
   color: white;
   text-align: center;
}
</style>
<?php
session_start(); 
?>
<?php
echo"<br>
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
$b="";
$_SESSION['fname']=$b;$cx=$_SESSION['id'];
echo "<font color='purple'>";
include 'timedate.php';
echo "</font>";
include 'connect1.php';

			echo "<div style='position: absolute; top: 0; right: 0px; width: -40px; text-align:right;'>

			<font color='Crimson' size='4'>

				<u>Welcome Admin</u>"."&nbsp;"."&nbsp;"."&nbsp;".$_SESSION['id']."<br><br>

						<u>Click here to</u>&nbsp;&nbsp;&nbsp;<a href='logout1.php' title='Logout'>Logout</a></font></div>";

echo "<br /><br />";

			echo "<a href='res.php'><font color='#86af49' size='4'>Go Back</font></a>";
	
   $a=$_POST['date'];
$c=$_POST['src'];
$d=$_POST['des'];
   
			if(!empty($_POST['date'])||!empty($_POST['src'])||!empty($_POST['des'])){
   
					$sql1=mysqli_query($con,"Select * from res where src='$c'   AND date='$a'");
		
							$duplicate=mysqli_num_rows($sql1);
   
									if($duplicate==0){
	   
	   echo"<br><br><br>";
	   
	   echo "<table>";
	   
echo "<div align='center'><font size='6' color='#86af49'>NO TRAINS !!!! Redirecting in 5 secs.....</font></div>";			
							header("refresh:5; url=res.php");	   
	   echo "</table>";
   }
   else{
                 echo "";	   
   }
   
   $sql="Select * from res where src='$c'   AND date='$a'";
   
   if($res=mysqli_query($con,$sql))
			{
			  
			  while($row = mysqli_fetch_array($res)){
						
						echo "<br /> <br /> <br />";
						echo "<th><div align= 'Center'><b>Reservation Inquiry</b></div></th>";
						
echo "<table  border='1' bgcolor='LightBlue'>";
						
echo "<th width='5%'>PNR</th><th width='5%'>TRAIN NO</th>
									
<th width='5%'>TRAIN NAME</th><th width='5%'>SOURCE</th><th width='5%'>Destination</th>
<th width='5%'>DOJ</th><th width='5%'>TICKETS AC I</th><th width='5%'>AC I TIER(INR)</th>
<th width='5%'>TICKETS AC II</th><th width='5%'>AC II TIER(INR)</th>
<th width='5%'>TICKETS AC III</th><th width='5%'>AC III TIER(INR)</th>
<th width='5%'>SLEEPER</th><th width='5%'>SL CLASS(INR)</th>
</table>";
										
									echo "<br /> <br /> <br />";
									
					echo "<th><div align= 'Center'>STATUS</div></th>";	
					
					echo "<table  border='1' bgcolor= 'LightBlue'>";
						
						$x=$row['id'];
								$k=$row['TRAIN_NUMBER'];
										$src=$row['src'];
												$des=$row['des'];
														$date=$row['date'];
echo "<th width='5%'>".$x."</th>";
echo "<th width='5%'>".$k."</th>";
echo "<th width='5%'>".$row['Tr_name']."</th>";
echo "<th width='5%'>".$src."</th>";
echo "<th width='5%'>".$des."</th>";
echo "<th width='5%'>".$date."</th>";
echo "<th width='5%'>".$row['AC_I']."</th>";
echo "<th width='5%'>".$row['FIRST_AC']."</th>";
											echo "<th width='5%'>".$row['AC_II']."</th>";
        						echo "<th width='5%'>".$row['SEC_AC']."</th>";
							echo "<th width='5%'>".$row['AC_III']."</th>";
						echo "<th width='5%'>".$row['THIRD_AC']."</th>";
				echo "<th width='5%'>".$row['SL']."</th>";		
	  echo "<th width='5%'>".$row['SL_CLASS']."</th>";
		echo "</tr></table><br><br><br>";
									echo "<a href='try.php?id=$x'>Book Your Ticket</a>";					
								}
												echo header("windows.location: res.php");
								}
 }
 else{
	    
		echo "No Trains.Try Again";
				 }		
?>
<div class="footer">
  <p><marquee>This is a dummy project. |All Rights Reserved. |@CopyRight 2018-2019</marquee></p>
     </div>					
