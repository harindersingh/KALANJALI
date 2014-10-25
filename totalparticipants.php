<?php
$con=mysqli_connect("localhost", "mvitkala_admin", "admin", "mvitkala_final");


$sum_query="SELECT SUM(No_of_participants) from tblMain M WHERE M.RID<226;";
$resum=mysqli_query($con,$sum_query);
$rowsum=mysqli_fetch_array($resum, MYSQLI_NUM);

echo "<h2>TOTAL PARTICIPANTS OF DAY 1: ".$rowsum[0]."</h2>";

$sum_query2="SELECT SUM(No_of_participants) from tblMain M WHERE M.RID>225;";
$resum2=mysqli_query($con,$sum_query2);
$rowsum2=mysqli_fetch_array($resum2, MYSQLI_NUM);
echo "<h2>TOTAL PARTICIPANTS OF DAY 2: ".$rowsum2[0]."</h2>";

echo"<br>";
$SUM=$rowsum2[0]+$rowsum[0];

echo "<h2>TOTAL PARTICIPANTS : ".$SUM."</h2>";


/*
$query1="SELECT Name, Event_Name from tblMain M , tblEvents E, tblEventwise EW where
M.CCode='$_POST[optcol]' AND
M.RID=EW.RID AND
EW.Event_type=E.Event_type AND
EW.Event_no=E.Event_no;";
echo "<div>";
$i=1;
  $res1=mysqli_query($con, $query1);
  echo "<table border='1' style='width:80%'>";
  echo "<td style='width:5%'>SL NO</td><td style='width:10%'>NAMES</td><td style='width:10%'>EVENT NAMES</td>";
  
 while( $row1=mysqli_fetch_array($res1, MYSQLI_NUM) )
 {
    echo "<tr><td style='width:5%'>".$i."</td><td style='width:10%'>".$row1[0]."</td><td style='width:10%'>  ". $row1[1]."</td></tr>";
    echo "<br>";
    $i++;
 }
 
 echo "</table>";
 
echo "</div>";
*/
?>