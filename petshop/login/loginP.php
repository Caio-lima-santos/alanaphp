
<?php

session_start();
include("../db/config.php");

//inicializacao de variaveis chatas

$_SESSION["Muser"]=" ";




$usuario=$_REQUEST["usuario"];
$senha=$_REQUEST["senha"];


//$func=$_REQUEST["funcionario"];
$sql="SELECT * FROM cliente WHERE usuario='{$usuario}'AND senha='{$senha}' ";


$res=$conn->query($sql);

if($row = $res->fetch_object()){
    $_SESSION["nome"]=$row->nome;
   
    switch($row->func){    
        
        
        case "administrador":
        header("Location: ../administrador/Aadm.php");
        break;

            
        case "cliente":
            header("Location: ../ACadastro/Agerente.php");
            break;

            
        case "secretaria":
        header("Location: ../secretaria/Asec.php");
        break;
    
    
    }
   
}else{
    header("Location: ../Alogin/login.php");  
}

?>