<?php

session_start();
$_SESSION["Muser"]=$_REQUEST["Muser"];
echo"{$_REQUEST["Mfunc"]}";
$_SESSION["Mfunc"]=$_REQUEST["Mfunc"];
header("location: ../Asec.php");
?>