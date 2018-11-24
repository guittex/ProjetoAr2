<?php
session_start();
unset($_SESSION["newsession"]);
header('Location: ../index.php');

?>

