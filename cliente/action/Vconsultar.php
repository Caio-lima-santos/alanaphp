<?php 
session_start();
include('../../db/config.php');
$id=$_REQUEST["id"];
$valor=$_REQUEST['valor'];
echo"{$id}{$valor}";


$sql1="SELECT * FROM cliente WHERE nome='{$_SESSION['nome']}'";
$res1=$conn->query($sql1);
$row1=$res1->fetch_object();

//fazer rezerva e desrezervar

if($row1->dinheiro>$valor){
    $dinheiroOP;

//procura dinheiro

//procura desconto
$sql2="SELECT * FROM servico WHERE nome='{$id}'";
$res2=$conn->query($sql2);
$row2=$res2->fetch_object();

$sql3="SELECT * FROM cliente WHERE nome='petshop'";
$res3=$conn->query($sql3);
$row3=$res3->fetch_object();

//cauculo para atualizar o dinheiro
$dinheiroOP=($row1->dinheiro)-(($row2->valor)-($row2->valor)*($row2->desconto));
$hotelM=$row3->dinheiro+($row2->valor)-($row2->valor)*($row2->desconto);
echo"{$dinheiroOP}";
//atualizando valores
$sql4="UPDATE cliente SET dinheiro='{$dinheiroOP}' WHERE nome='{$_SESSION['nome']}'";
$sql5="UPDATE cliente SET dinheiro='{$hotelM}' WHERE nome='petshop'";
//executando operacoes
$res3=$conn->query($sql3);
$res4=$conn->query($sql4);
$res5=$conn->query($sql5);
echo"aqui";

    if($res5==true){
        header("Location: ../../cliente/Acli.php");
    }else{
        header("Location: ../../cliente/Acli.php");
    
    }
}

?>