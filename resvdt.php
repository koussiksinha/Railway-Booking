<style>
body{color: purple;background-color:#a79e84;}
th{padding:6px;}
.footer {
	position:fixed;
   left: 0;
   bottom:-15;
   width: 100%;
   background-color:#a79e84;
   color:crimson;
   text-align: center;
}
</style>
<?php
session_start(); 
?>
<?php
include 'connect1.php';
echo "<font color='FireBrick'>";
include 'timedate.php'; 
echo "</font>"; 

$cx=$_SESSION['id'];

echo "<br><br>";

echo "<div class='left'>";

 echo "<a href='adm.php' class='active'><button><font color='#a79e84' size='4'>Admin Login Page</font></button></a>.
 <a href='adm1.php' class='inactive'><button><font color='#a79e84' size='4'>Admin Page</font></button></a>";
 
 echo "</div>";

	echo "<div align='right'><font color='FireBrick' size='4'><u>Welcome Admin</u>"."&nbsp;"."&nbsp;".$_SESSION['id']."</font></div>"."<br>";

		echo "<div align='right'><a href='logout1.php' title='Logout'><font color='FireBrick' size='4'>Logout</font></a></div>";
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
	<style>th{background-color:white;} </style>
    <body>
	<th><u><b><div align="Centre"><font color='FireBrick'>Train Info</font></div></b></u></th><br /><br />
    <div id="content">
        <table width="100%" id="table" border="1" >
		            <tr class="tr_header">
               <th style="background-color:#76D7C4;">PNR</th>
				<th style="background-color:#76D7C4;">TRAIN NUMBER</th>
				<th style="background-color:#76D7C4;">TRAIN NAME</th> 
				<th style="background-color:#76D7C4;"> NAME</th> 
				<th style="background-color:#76D7C4;"> AGE </th> 
				<th style="background-color:#76D7C4;">DOJ</th>
				<th style="background-color:#76D7C4;">SEAT</th> 
				<th style="background-color:#76D7C4;">SOURCE</th> 
				<th style="background-color:#76D7C4;">DESTINATION</th>
				<th style="background-color:#76D7C4;">CLASS RESERVED</th> 
				<th style="background-color:#76D7C4;">UPDATE</th> 
				<th style="background-color:#76D7C4;">DELETE</th> 
            </tr>
            <?php
            @$l=$_GET['PNR'];
            $sql = "SELECT COUNT(*) AS cntrows FROM rest";
            $result = mysqli_query($con,$sql);
            $fetchresult = mysqli_fetch_array($result);
            $allcount = $fetchresult['cntrows'];

            // selecting rows
            $sql = "SELECT * FROM rest ORDER BY PNR ASC limit $row,".$rowperpage;
            $result = mysqli_query($con,$sql);
            $sno = $row + 1;
            while($fetch = mysqli_fetch_array($result)){
                $l=$fetch['PNR'];
	 	 $a=$fetch['Tr_Num'];
	  $b=$fetch['Train_Name'];
	  $c=$fetch['na'];
	  $d=$fetch['age'];
	  $e=$fetch['DOJ'];
	  $f=$fetch['seat'];
	  $g=$fetch['src'];
	  $h=$fetch['des'];
	  $i=$fetch['class'];
	                ?>
                <tr>
<th ><?php echo $l; ?></th>
<th ><?php echo $a; ?></th>
<th ><?php echo $b; ?></th>
<th ><?php echo $c; ?></th>
<th ><?php echo $d; ?></th>
<th ><?php echo $e; ?></th>
<th ><?php echo $f; ?></th>
<th ><?php echo $g; ?></th>
<th ><?php echo $h; ?></th>
<th ><?php echo $i; ?></th>
<th ><?php echo "<a href='resvupdte.php?PNR=$l'>UPDATE</a>";?></th>
<th ><?php echo "<a href='delresv.php?PNR=$l'>DELETE</a>";?></th>						
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
  <p><marquee>This is a dummy project. |All Rights Reserved. |@CopyRight 2018-2019</marquee></p>
     </div>
        </form>
    </div>
    </body>
</html>

