


<form name="f1" action="res2.php" method="post">
<h2> Train Schedule </h2>
<h3>
Find your reservation available or not
</h3>

Source
<select name="src">
<option>--Source--</option>
<?php
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("abcd");
$sql="select distinct src from resv";
$res=mysql_query($sql);
while($row=mysql_fetch_array($res))
{
 $source1=$row['src'];
 echo "<option value='$source1'>".$source1."</option>";
}
?>
</select>



Destination
<select name="des">
<option>--Destination--</option>
<?php
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("abcd");
$sql="select distinct des from resv";
$res=mysql_query($sql);
while($row=mysql_fetch_array($res))
{
 $dest1=$row['des'];
 echo "<option value='$dest1'>".$dest1."</option>";
}
?>
</select>




<h3> click to <input type="submit" name="sub" value="submit">