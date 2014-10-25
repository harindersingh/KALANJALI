<?php
$con=mysqli_connect("localhost", "mvitkala_admin", "admin", "mvitkala_final");


$sum_query="SELECT SUM(Fee) from tblMain where RID<226;";
$resum=mysqli_query($con,$sum_query);
$row=mysqli_fetch_array($resum, MYSQLI_NUM);

echo "<h3>Amount collected on First day :".$row[0]."</h3>";

$sum_query1="SELECT  User, SUM(Fee) from tblMain where RID<226 Group BY (User) ;";
$resum1=mysqli_query($con,$sum_query1);


$i=1;

echo "<table border='1' style='width:80%'>";
  echo "<th style='width:5%'>SL NO</th><th style='width:10%'>User Names</th><th style='width:10%'>Amount</th>";
  
 while( $row1=mysqli_fetch_array($resum1, MYSQLI_NUM) )
 {
    echo "<tr><td style='width:5%'>".$i."</td><td style='width:10%'>".$row1[0]."</td><td style='width:10%'>".$row1[1]."</td></tr>";
    echo "<br>";
    $i++;
 }
 echo "<tr><td style='width:5%'></td><td style='width:10%'>TOTAL</td><td style='width:10%'>".$row[0]."</td></tr>";
 echo "</table>";

echo "<br><br>";

$sum_query11="SELECT SUM(Fee) from tblMain where RID>225;";
$resum11=mysqli_query($con,$sum_query11);
$row11=mysqli_fetch_array($resum11, MYSQLI_NUM);

echo "<h3>Amount collected on Second day :".$row11[0]."</h3>";


$sum_query12="SELECT  User, SUM(Fee) from tblMain where RID>225 Group BY (User) ;";
$resum12=mysqli_query($con,$sum_query12);


$j=1;

echo "<table border='1' style='width:80%'>";
  echo "<th style='width:5%'>SL NO</th><th style='width:10%'>User Names</th><th style='width:10%'>Amount</th>";
  
 while( $row12=mysqli_fetch_array($resum12, MYSQLI_NUM) )
 {
    echo "<tr><td style='width:5%'>".$j."</td><td style='width:10%'>".$row12[0]."</td><td style='width:10%'>".$row12[1]."</td></tr>";
    echo "<br>";
    $j++;
 }
 echo "<tr><td style='width:5%'></td><td style='width:10%'>TOTAL</td><td style='width:10%'>".$row11[0]."</td></tr>";
 echo "</table>";
 
 

echo "<h3>TOTAL Amount collected  :".($row11[0]+$row[0])."</h3>";







$sum_query13="SELECT  Event_Name, SUM(Fee) from tblMain M, tblEventwise EW, tblEvents E where
M.RID=EW.RID AND
EW.Event_type=E.Event_type AND
EW.Event_no=E.Event_no GROUP BY (Event_Name);";

$resum13=mysqli_query($con,$sum_query13);


$k=1;
$s=0;
echo "<table border='1' style='width:80%'>";
  echo "<th style='width:5%'>SL NO</th><th style='width:10%'>Event Name</th><th style='width:10%'>Amount</th>";
  
 while( $row13=mysqli_fetch_array($resum13, MYSQLI_NUM) )
 {
    echo "<tr><td style='width:5%'>".$k."</td><td style='width:10%'>".$row13[0]."</td><td style='width:10%'>".$row13[1]."</td></tr>";
    echo "<br>";
    $k++;
    $s=$s+$row13[1];
    
 }
 echo "<tr><td style='width:5%'></td><td style='width:10%'>TOTAL</td><td style='width:10%'>".$s."</td></tr>";
 echo "</table>";
 




/*
$sum_query14="SELECT  Name, CName, Event_Name, Fee from tblMain M, tblEventwise EW, tblEvents E, tblColleges C where
M.RID=EW.RID AND
EW.Event_type=E.Event_type AND 
M.CCode=C.CCode AND
EW.Event_no=E.Event_no AND
M.Fee=0 AND
M.CCode <> 'MV' ";

$resum14=mysqli_query($con,$sum_query14);


$l=1;

echo "<table border='1' style='width:80%'>";
  echo "<th style='width:5%'>SL NO</th><th style='width:10%'>Name</th><th style='width:10%'>CollegeName</th><th style='width:10%'>Event Name</th><th style='width:10%'>Fee</th>";
  
 while( $row14=mysqli_fetch_array($resum14, MYSQLI_NUM) )
 {
    echo "<tr><td style='width:5%'>".$l."</td><td style='width:10%'>".$row14[0]."</td><td style='width:10%'>".$row14[1]."</td><td style='width:10%'>".$row14[2]."</td><td style='width:10%'>".$row14[3]."</td></tr>";
    echo "<br>";
    $l++;
    //$s=$s+$row13[1];
    
 }
 
 echo"</table>";
 */
 
 
 $event="SELECT Event_Name , SUM(No_of_participants)  from tblMain M , tblEvents E, tblEventwise EW WHERE
 M.RID=EW.RID AND
 E.Event_type=EW.Event_type AND
 E.Event_no=EW.Event_no GROUP BY (Event_Name);";
 
 $result11=mysqli_query($con,$event);
 
 
$k=1;

echo "<table border='1' style='width:80%'>";
  echo "<th style='width:5%'>SL NO</th><th style='width:10%'>Event Name</th><th style='width:10%'>Number of participants</th>";
  
 while( $rowww=mysqli_fetch_array($result11, MYSQLI_NUM) )
 {
    echo "<tr><td style='width:5%'>".$k."</td><td style='width:10%'>".$rowww[0]."</td><td style='width:10%'>".$rowww[1]."</td></tr>";
    echo "<br>";
    $k++;
    //$s=$s+$row13[1];
    
 }
// echo "<tr><td style='width:5%'></td><td style='width:10%'>TOTAL</td><td style='width:10%'>".$s."</td></tr>";
 echo "</table>";
 


 
 
 
 
 //echo "<tr><td style='width:5%'></td><td style='width:10%'>TOTAL</td><td style='width:10%'>".$s."</td></tr>";
 echo "</table>";
 


?>