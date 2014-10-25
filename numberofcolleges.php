<?php
$con=mysqli_connect("localhost", "mvitkala_admin", "admin", "mvitkala_final");


$sum_query="SELECT  CName from tblMain M , tblColleges C where M.CCode=C.CCode GROUP BY CName;";
$resum=mysqli_query($con,$sum_query);
$i=1;

echo "<table border='1' style='width:80%'>";
  echo "<th style='width:5%'>SL NO</th><th style='width:10%'>COLLEGE NAMES</th>";
  
 while( $row1=mysqli_fetch_array($resum, MYSQLI_NUM) )
 {
    echo "<tr><td style='width:5%'>".$i."</td><td style='width:10%'>".$row1[0]."</td></tr>";
    echo "<br>";
    $i++;
 }
 
 echo "</table>";
 



?>