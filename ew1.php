 <?php
 
 $con=mysqli_connect("localhost", "mvitkala_admin", "admin", "mvitkala_final");
 
 $query="SELECT Event_Name from tblEvents E where
 E.Event_type='$_POST[optone]' AND
 E.Event_no='$_POST[opttwo]';";
 
 $res=mysqli_query($con, $query);
 $row=mysqli_fetch_array($res, MYSQLI_NUM);
 
 echo "<h3>REGISTRATIONS OF ".$row[0]."</h3>";

 $query1="SELECT Name, CName , PhNo from tblMain M, tblColleges C, tblEventwise EW, tblP_Details PD where
 EW.Event_type='$_POST[optone]' AND
 EW.Event_no='$_POST[opttwo]' AND
 M.RID=EW.RID AND
 M.CCode=C.CCode AND
 M.RID=PD.RID;";
 
 $i=1;
  $res1=mysqli_query($con, $query1);
  echo "<table border='1' style='width:80%'>";
  echo "<td style='width:5%'>SL NO</td><td style='width:10%'>NAMES</td><td style='width:10%'>COLLEGE NAMES</td><td style='width:10%'>PHONE NUMBERS</td>";
  
 while( $row1=mysqli_fetch_array($res1, MYSQLI_NUM) )
 {
    echo "<tr><td style='width:5%'>".$i."</td><td style='width:10%'>".$row1[0]."</td><td style='width:10%'>  ". $row1[1]."</td><td style='width:10%'>  ". $row1[2]."</td></tr>";
    echo "<br>";
    $i++;
 }
 
 echo "</table>";
 

 ?>
 