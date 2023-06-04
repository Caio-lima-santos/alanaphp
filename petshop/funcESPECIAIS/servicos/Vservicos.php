<?php

include("../../db/config.php");

$nome=$_REQUEST['nome'];
$desc=$_REQUEST['descricao'];
$ti=$_REQUEST['tipo'];
$va=$_REQUEST['valor'];


$sql="INSERT INTO servico 
VALUES
('{}',
'{$nome}',
'{$desc}',
'{$ti}',
'{$va}',
'{}')";

$conn->query($sql);

header("location: ../../administrador/Aadm.php")

?>