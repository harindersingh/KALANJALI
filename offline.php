<?php

session_start();

$con=mysqli_connect("localhost", "mvitkala_admin", "admin", "mvitkala_final");


if($_POST['optone']==0 || $_POST['opttwo']==0 )
{
    $_SESSION['check']="notdone";
    header('Location: oregister.php');
}
else
{

if($_POST[optcol]!="OTH")
{
    $query1="INSERT INTO tblMain (Name, CCode, No_of_participants, User, Fee)
    VALUES ( '$_POST[name_o_p]','$_POST[optcol]', '$_POST[n_o_p]', '$_SESSION[name]', '$_POST[Fee]')";
    $b=mysqli_query($con,$query1);
}
else
{
    $equery="INSERT INTO tblColleges(CCode,CName) VALUES('$_POST[colcode]', '$_POST[colname]');";
    mysqli_query($con,$equery);
    
    $equery1="INSERT INTO tblMain (Name, CCode, No_of_participants, User)
    VALUES ( '$_POST[name_o_p]','$_POST[colcode]', '$_POST[n_o_p]', '$_SESSION[name]')";
    mysqli_query($con,$equery1);
    
    
}

$query2="INSERT INTO tblP_Details (EmailID, PhNo)
VALUES( '$_POST[emailID]','$_POST[contactNo]')";
$a=mysqli_query($con, $query2);


$query3="INSERT INTO tblEventwise (Event_type, Event_no)
VALUES( '$_POST[optone]','$_POST[opttwo]')";
$c=mysqli_query($con, $query3);


$_SESSION['name1']=$_SESSION['name'];

header('Location: oregister.php');
}


//mysqli_close($con);

?>