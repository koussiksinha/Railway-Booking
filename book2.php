<?php 
session_start(); 
include 'connect1.php';
include 'timedate.php';
$cx=$_SESSION['id'];
echo "<br>
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

<font color='crimson' size='4'>

<u>Welcome </u>"."&nbsp;"."&nbsp;"."&nbsp;".$_SESSION['id']."<br><br>

<u>Click here to</u>&nbsp;&nbsp;&nbsp;<a href='logout1.php' title='Logout'>Logout</a></font></div>";

?>
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
</style><br />
<div align="left">
<font size="4"><a href="form.php">Home Page</a></font>
</div><br />

<?php
include 'connect1.php';
$trnum=$_POST['trnum'];
$tr=$_POST['trn'];
$a=$_POST['na'];$bb=addslashes($a);@$bb=mysqli_real_escape_string($con,$_POST['na']);
$b=$_POST['age'];
$date=$_POST['date'];
$c=$_POST['seat'];
$d=$_POST['src'];
$e=$_POST['des'];
$f=$_POST['class'];
$trnum_1=$_POST['trnum1'];
$tr_1=$_POST['trn1'];
$i=$_POST['na1'];
$j=$_POST['age1'];
$date_1=$_POST['date1'];
$k=$_POST['seat1'];
$m=$_POST['src_1'];
$e_1=$_POST['des1'];
$l=$_POST['class1'];

if(isset($_POST['submit'])){
if(!empty($_POST['na']) && !empty($_POST['age']) 
	&& !empty($_POST['seat']) && !empty($_POST['class'])){
		
$sql= "insert into rest (Tr_Num,Train_Name,na,age,DOJ,seat,src,des,class) 
values ('$trnum','$tr','$a','$b','$date','$c','$d','$e','$f');";	
$res=mysqli_query($con,$sql);

echo "PNR:". mysqli_insert_id($con);

echo "<br><br><br>";
	
$sql1= "insert into rest (Tr_Num,Train_Name,na,age,DOJ,seat,src,des,class) values
('$trnum_1','$tr_1','$i','$j','$date_1','$k','$m','$e_1','$l') ;"; 	

$res1=mysqli_query($con,$sql1);
echo "PNR:". mysqli_insert_id($con);

if($res || $res1){
echo "<br><br>Tickets were booked successfully...!!. Just enter your pnr in the next page to get your ticket info.<br/><br/>
<br><a href='book3.php'>VIEW TICKET</a><br/><br/>";
}
}
}
else{
	echo "<br/><br/>Something went wrong<br><a href='try.php'> GO BACK </a><br>";
			}
?>

<div class="footer"><p>
<marquee 
text-align="center"
     direction="left"
     loop="7"
     scrollamount="1"
     scrolldelay="2"
     behavior="alternate"
     width="100%"
     bgcolor="aqua"  
  >This is a dummy project. |All Rights Reserved. |@CopyRight 2018-2019</marquee></p>
	</div>
