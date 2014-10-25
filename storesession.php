<?php session_start();

$_SESSION['email'] = $_GET['email'];
$_SESSION['name'] = $_GET['name'];
echo $_SESSION["email"];
header("Location: http://sirmvitkalanjali.com/bregister.php");
?>