<?php 
include 'timedate.php';
session_start(); 
$cx=$_SESSION['id'];
echo "<div align='right'><u><i><font size='5'>Welcome</i></u>"." "." "." ".$_SESSION['id'].
"</font></div>";
include 'connect1.php';
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
<div align="right">
<font size="4"><a href="form.php">Home</a></font><br /><br />
<font size="4"><a href="logout.php" align="right">Logout</a></font>
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










                 



 