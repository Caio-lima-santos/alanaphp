<?php

include("../../db/config.php");


$ti=$_REQUEST['tipo'];
$va=floatval($_REQUEST['valor']/100);


$sql="UPDATE servico SET desconto='{$va}' WHERE tipo='{$ti}' ";

$conn->query($sql);

header("location: ../../administrador/Aadm.php")

?>