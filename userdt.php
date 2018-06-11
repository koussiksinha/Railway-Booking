<style>
body {color: purple;background-color:#FA8072; }
th {padding: 6px;}

</style>

<?php session_start(); ?>

			<?php
			$cx=$_SESSION['id'];
			include 'timedate.php'; include 'connect1.php';
			
echo "<br><br><div class='Top'>
			<button><a href='adm.php' class='active'>Admin Login Page</a></button>
			&nbsp;&nbsp;	
				<button><a href='adm1.php' class='inactive'>Admin Page</a></button>";
						
						 echo "</div> <br/>";
echo "<font color='Crimson'size='4'><u><div class='Top' style='float:right;'>Welcome Admin</u></font>"."&nbsp;"."&nbsp;".$_SESSION['id']."</div>";
echo "<div align=right><font color='Crimson'size='4'><u>Click here to</u>&nbsp;&nbsp;<a href='logout1.php' title='Logout'>Logout</font></a></div>";
echo "<h2 style='text-align:center'><u>VIEW USER DETAILS</u></h2>";
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
        </form>
    </div>
    </body>
</html>