<style>
body {color: purple;background-color:#FA8072; }
th {padding: 6px;}
.footer {
	position:fixed;
   left: 0;
   bottom:-15;
   width: 100%;
   background-color:#018786;
   color:#E3E4FA;
   text-align: center;
}
</style>
<?php session_start(); ?>
			<?php
			$cx=$_SESSION['id'];
echo"<font color='Crimson'>";include 'timedate.php'; echo"</font>"; 
			include 'connect1.php';
echo "<div align='center'>
<marquee 
      direction='left'
     loop='15'
     scrollamount='2'
     scrolldelay='2'
     behavior='alternate'
     width='50%'
     background-color:'#018786'
   color:'#E3E4FA'
	 font-size='16px'
     >
<font color='#E3E4FA' background-color:'#018786';>Welcome To&nbsp;&nbsp;Admin Page</font>
</marquee>
</div>";			
echo "<br><br><div class='Top'>
			<button><a href='adm.php' class='active'>Admin Login Page</a></button>
							&nbsp;&nbsp;	
									<button><a href='adm1.php' class='inactive'>Admin Page</a></button>";
												echo "</div> <br/>";				 						 								 
echo "<font color='Crimson' size='4'><u>
<div style='position: absolute; top: 0; right: 0px; width: -40px; text-align:right;'>
Welcome Admin</u></font>"."&nbsp;"."&nbsp;".$_SESSION['id']."
&nbsp;&nbsp;<br><br><a href='logout1.php' title='Logout'><font color='Crimson'size='4'>Logout</font></a></div>";

echo "<h2><div align='center'><u><font color='Crimson'>VIEW USER DETAILS</font></u></div></h2>";
echo "<br><br>";
?>
<!----------------------PAGINATION USED ----------------->
<!doctype html>
<html>
    <head>
      <?php
            $rowperpage = 5;
            $row = 0;
	            if(isset($_POST['but_prev'])){
                $row = $_POST['row'];
                $row -= $rowperpage;
                if( $row < 0 ){
                    $row = 0;
                }
            }
                        if(isset($_POST['but_next'])){
                $row = $_POST['row'];
                $allcount = $_POST['allcount'];

                $val = $row + $rowperpage;
                if( $val < $allcount ){
                    $row = $val;
                }
            }
        ?>
    </head>
<style>th,td{background-color:powderblue;}</style>	
    <body>
    <div id="content">
        <table width="100%" id="table" border="1">
            <tr class="tr_header">          
  <th>ID</th>
  <th>UNAME</th>
  <th>FNAME </th>
  <th>LNAME </th>
  <th>EMAIL</th>
  <th>PASSWORD</th>
 <th>VIEW</th>
 <th>DELETE</th>
            </tr>
            <?php
            @$up=$_GET['id'];
            $sql = "SELECT COUNT(*) AS cntrows FROM test";
            $result = mysqli_query($con,$sql);
            $fetchresult = mysqli_fetch_array($result);
            $allcount = $fetchresult['cntrows'];

            // selecting rows
            $sql = "SELECT * FROM test ORDER BY id ASC limit $row,".$rowperpage;
            $result = mysqli_query($con,$sql);
            $sno = $row + 1;
            while($fetch = mysqli_fetch_array($result)){
                $l = $fetch['id'];
                $uname = $fetch['uname'];
				$c=$fetch['fname'];
   $d=$fetch['lname'];
   $e=$fetch['email'];
   $f=$fetch['password'];	
                ?>
                <tr>
<th align='left' ><?php echo $l; ?></th>
<th ><?php echo $uname; ?></th>
<th ><?php echo $c; ?></th>
<th><?php echo $d; ?></th>
<th><?php echo $e; ?></th>
					<th width="9%" >
					<style>
	input[type='password'],textarea {
			background-color:powderblue;}
  </style>	
<?php 
echo "<input type='password' style='background-color:powderblue;' value='$f' >"; ?>
</th>
<?php echo "<td ><a href='userdt1.php?id=$l'>VIEW</a></td>";?>
<?php echo "<td ><a href='userdt2.php?id=$l'>DELETE</a></td>";?>					
                </tr>
            <?php
                $sno ++;
            }
			?>
        </table>
        <form method="post" action="">
            <div id="div_pagination">
                <input type="hidden" name="row" value="<?php echo $row; ?>">
                <input type="hidden" name="allcount" value="<?php echo $allcount; ?>"><br/><br />
                <input type="submit" class="button" name="but_prev" value="Previous">
                <input type="submit" class="button" name="but_next" value="Next">
            </div>
			<div class="footer">
  <p><marquee direction="right"
     loop="15"
     scrollamount="2"
     scrolldelay="2"
     behavior="alternate"
     width="100%">This is a dummy project. |All Rights Reserved. |@CopyRight 2018-2019</marquee></p>
     </div>
        </form>
    </div>
    </body>
</html>
