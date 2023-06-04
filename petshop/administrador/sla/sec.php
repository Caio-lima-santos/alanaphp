<?php

session_start();
$_SESSION["Muser"]=$_REQUEST["Muser"];
$_SESSION["Mfunc"]=$_REQUEST["Mfunc"];
header("location: ../Aadm.php");
?>