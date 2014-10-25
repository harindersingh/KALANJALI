<?php
unset($_SESSION['name']);
unset($_SESSION['name1']);

session_destroy();

header('Location: login.php');

?>