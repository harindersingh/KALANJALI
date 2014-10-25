<?php
$con=mysqli_connect("localhost", "mvitkala_admin", "admin", "mvitkala_final");

$query="SELECT CName from tblColleges where CCode='$_POST[optcol]';";

$res=mysqli_query($con,$query);
$row=mysqli_fetch_array($res, MYSQLI_NUM);

$sum_query="SELECT SUM(No_of_participants) from tblMain M where CCode='$_POST[optcol]';";
$resum=mysqli_query($con,$sum_query);
$rowsum=mysqli_fetch_array($resum, MYSQLI_NUM);

echo "<h3>REGISTRATIONS FROM : ".$row[0]."</h3>";
echo "<h2>TOTAL PARTICIPANTS : ".$rowsum[0]."</h2>";

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

?>
