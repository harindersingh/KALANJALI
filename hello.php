<?php
session_start();

$con=mysqli_connect("localhost","vaithee","4609603vvv","kalanjali");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}



if($_POST['optone']==0 || $_POST['opttwo']==0 )
{
    $_SESSION['check']="notdone";
    header('Location: bregister.php');
}
else
{

$query1="INSERT INTO tblMain (Name, CCode)
VALUES ( '$_POST[name_o_p]','$_POST[optcol]')";
$b=mysqli_query($con,$query1);


$query2="INSERT INTO tblP_Details (EmailID, PhNo)
VALUES( '$_SESSION[email]','$_POST[contactNo]')";
$a=mysqli_query($con, $query2);


$query3="INSERT INTO tblEventwise (Event_type, Event_no)
VALUES( '$_POST[optone]','$_POST[opttwo]')";
$c=mysqli_query($con, $query3);

if($a && $b && $c)
{
    /*echo '<script language="javascript">';
    echo 'alert(" Hey , You Have resgistered successfully !! See you at the event :) " ';   
    echo '</script>';*/
}

header('Location: done.php');
}


mysqli_close($con);




?>