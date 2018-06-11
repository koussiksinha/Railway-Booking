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
echo"<br>";
$b="";
$_SESSION['fname']=$b;$cx=$_SESSION['id'];
echo "<font color='purple'>";
include 'timedate.php';
echo "</font>";
include 'connect1.php';

			echo "<div align='right'><font color='#86af49' size='4'><u>Welcome"." ".$_SESSION['id']." ".""." "." "."<br/><br/></div>
							<div align='right'><a href='logout.php' title='Logout'><font color='#86af49' size='4'>Logout</font></a></div>";

echo "<br /><br />";

			echo "<a href='res.php'><font color='#86af49' size='4'>Go Back</font></a>";
	
   $a=$_POST['date'];$c=$_POST['src'];$d=$_POST['des'];
   
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
						
					    echo "<table style='width:100%' border='1' bgcolor='LightBlue'>";
						
						echo "<th>PNR</th>";
						
						echo "<th>TRAIN NO</th>";
									
									echo "<th>TRAIN NAME</th> ";
											
											echo "<th>SOURCE</th> ";
														echo "<th>Destination</th>";
																echo"<th>DOJ</th>";
																	echo "<th>TICKETS AC I</th>";
															echo "<th>AC I TIER(INR)</th>";
															echo "<th>TICKETS AC II</th>";
															echo "<th>AC II TIER(INR)</th>";
													echo "<th>TICKETS AC III</th>";
											echo "<th>AC III TIER(INR)</th>";
										echo "</table>";
										
									echo "<br /> <br /> <br />";
									
					echo "<th><div align= 'Center'>STATUS</div></th>";	
					
					echo "<table style='width:100%' border='1' bgcolor= 'LightBlue'>";
						
						$x=$row['id'];
								$k=$row['TRAIN_NUMBER'];
										$src=$row['src'];
												$des=$row['des'];
														$date=$row['date'];
																echo "<th>".$x."</th>";
																		echo "<th>".$k."</th>";
										echo "<th>".$row['Tr_name']."</th>";
													echo "<th>".$src."</th>";
																echo "<th>".$des."</th>";
																			echo "<th>".$date."</th>";
																	echo "<th>".$row['AC_I']."</th>";
															echo "<th>".$row['FIRST_AC']."</th>";
											echo "<th>".$row['AC_II']."</th>";
        						echo "<th>".$row['SEC_AC']."</th>";
							echo "<th>".$row['AC_III']."</th>";
						echo "<th>".$row['THIRD_AC']."</th>";
	  
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
					
					
					     
						
						
				
						
					
					 
				
			
			
		
		
 
 