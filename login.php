<?php
session_start();

$_SESSION['logging']="1";

?>

<html>
    <head>
        
    </head>
    <body>
        <form method="post" action="oregister.php">
            
        <input type="text" placeholder="ENTER YOUR NAME" name="uname" required>
        <input type="submit">
        
        </form>
    </body>
</html>