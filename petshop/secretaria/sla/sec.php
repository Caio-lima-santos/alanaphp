<?php

session_start();
$_SESSION["Muser"]=$_REQUEST["Muser"];
header("location: ../Asec.php");
?>