<style>
body {color: purple;background-color:#E5E4E2; }
</style>
<?php
session_start(); 
?>
<?php
echo "<br><font color='#0020C2'>";
include 'timedate.php'; 
echo "</font>";

include 'connect1.php';

echo "<br><br>";

echo "<a href='adm.php' class='active'><button>Admin Login Page</button></a>
  
  <a href='adm1.php' class='inactive'><button>Admin Page</button></a><br><br></div>";

  $cx=$_SESSION['id'];

echo "<div style='float: right;'><font color='#0020C2' size='4'><u>Welcome Admin</u>"."&nbsp;"." "." ".""."&nbsp;".'&nbsp;'.$_SESSION['id']."</font><br><br>
<a href='logout.php'><font color='#0020C2' size='4'>Logout</a></font></div>";
echo "<h2><font color='#0020C2'>View Train Details</font></h2>";
?>
<!----------------------PAGINATION USED ----------------->
<!doctype html>
<html>
    <head>
        
        <?php
            $rowperpage = 4;
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
		<style>th{background-color:Grayish Turquoise;} </style>
    </head>
    <body>
    <div id="content">
        <table width="100%" id="table" border="1" bgcolor="#56A5EC">
            <tr class="tr_header">
                
<th>ID</th><th>TRAIN NUMBER</th><th>TRAIN NAME</th><th>SOURCE</th><th>DESTINATION</th>

<th>DATE</th><th>AC_I</th><th>FARE</th><th>BOOKED TICKETS</th><th>BALANCE TKTS</th><th>AC_II</th><th>FARE</th> 

<th>BOOKED TICKETS</th><th>BALANCE TKTS</th><th>AC_III</th><th>FARE</th><th>BOOKED TICKETS</th>

<th>BALANCE TKTS</th><th>SLEEPER</th><th>FARE</th><th>BOOKED TICKETS</th><th>BALANCE TKTS</th>

<th>UPDATE</th><th>DELETE</th>
            </tr>
            <?php
            @$up=$_GET['id'];
            $sq = "SELECT COUNT(*) AS cntrows FROM res";
            $result = mysqli_query($con,$sq);
            $fetchresult = mysqli_fetch_array($result);
            $allcount = $fetchresult['cntrows'];

            // selecting rows
            $sq = "SELECT * FROM res ORDER BY id ASC limit $row,".$rowperpage;
            $result = mysqli_query($con,$sq);
            $sno = $row + 1;
            while($fetch = mysqli_fetch_array($result)){
               $up = $fetch['id'];
                $a = $fetch['TRAIN_NUMBER'];
				$b=$fetch['Tr_name'];
   $c=$fetch['src'];
   $d=$fetch['des'];
   $e=$fetch['date'];
   $f=$fetch['AC_I'];
   $g=$fetch['FIRST_AC'];
   $h=$fetch['book'];
   $i=$fetch['bal'];
   $j=$fetch['AC_II'];
   $k=$fetch['SEC_AC'];
   $l=$fetch['book1'];
   $m=$fetch['bal1'];
   $n=$fetch['AC_III'];
   $o=$fetch['THIRD_AC'];
   $p=$fetch['book2'];
   $q=$fetch['bal2'];
   $r=$fetch['SL'];
   $s=$fetch['SL_CLASS'];
   $t=$fetch['book3'];
   $u=$fetch['bal3'];
?>
                <tr>
<th style="background-color:white;"><?php echo $up; ?></th>
<th style="background-color:white;"><?php echo $a; ?></th>
<th style="background-color:white;"><?php echo $b; ?></th>
<th style="background-color:white;"><?php echo $c; ?></th>
<th style="background-color:white;"><?php echo $d; ?></th>
<th style="background-color:white;"><?php echo $e; ?></th>
<th style="background-color:white;"><?php echo $f; ?></th>
<th style="background-color:white;"><?php echo $g; ?></th>
<th style="background-color:white;"><?php echo $h; ?></th>
<th style="background-color:white;"><?php echo $i; ?></th>
<th style="background-color:white;"><?php echo $j; ?></th>
<th style="background-color:white;"><?php echo $k; ?></th>
<th style="background-color:white;"><?php echo $l; ?></th>
<th style="background-color:white;"><?php echo $m; ?></th>
<th style="background-color:white;"><?php echo $n; ?></th>
<th style="background-color:white;"><?php echo $o; ?></th>
<th style="background-color:white;"><?php echo $p; ?></th>
<th style="background-color:white;"><?php echo $q; ?></th>
<th style="background-color:white;"><?php echo $r; ?></th>
<th style="background-color:white;"><?php echo $s; ?></th>
<th style="background-color:white;"><?php echo $t; ?></th>
<th style="background-color:white;"><?php echo $u; ?></th>
<?php echo "<td align='center' bgcolor='white'><a href='trndt1.php?id=$up'>UPDATE</a></td>";?>

<?php echo "<td align='center' bgcolor='white'><a href='trndt3.php?id=$up'>DELETE</a></td>"."</tr>";?>					
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
<?php 
echo "<button><a href='trndt2.php'><h4><font color='Mahogany'>ADD TRAINS</font></h4></a></button>";
?>






	



