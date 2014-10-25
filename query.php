<?php
 
 $con=mysqli_connect("localhost", "vaithee", "4609603vvv", "kalanjali");
 
 $query1="SELECT Name, C.CName, E.Event_Name from tblMain M, tblColleges C, tblEventwise EW,  tblEvents E where
 EW.Event_type=E.Event_type AND
 EW.Event_no=E.Event_no AND
 M.RID=EW.RID AND
 M.CCode=C.CCode;";
 $i=1;
  $res1=mysqli_query($con, $query1);
  echo "<table border='1' style='width:80%'>";
  echo "<td style='width:5%'>SL NO</td><td style='width:10%'>NAMES</td><td style='width:10%'>COLLEGE NAMES</td><td style='width:10%'>EVENT NAME</td>";
  
 while( $row1=mysqli_fetch_array($res1, MYSQLI_NUM) )
 {
    echo "<tr><td style='width:5%'>".$i."</td><td style='width:10%'>".$row1[0]."</td><td style='width:10%'>  ". $row1[1]."</td><td style='width:10%'>  ". $row1[2]."</td></tr>";
    echo "<br>";
    $i++;
 }
 
 echo "</table>";
 

 ?>
 