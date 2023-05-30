<?php
include("./config.php");
        switch($_REQUEST["page"])
        {
        case "cadastrar":
         switch($_REQUEST["tipo"]){

            case "cliente":
         $usuario=$_REQUEST["usuario"];
         $senha= $_REQUEST["senha"]; 
         $nome= $_REQUEST["nome"]; 
         $cpf= $_REQUEST["cpf"]; 
         $email= $_REQUEST["email"];
         $telefone= $_REQUEST["telefone"];

         $sql="INSERT INTO cliente(id,usuario,senha,nome,cpf,email,telefone)
         values('',
         '{$usuario}',
         '{$senha}',
         '{$nome}',
         '{$cpf}',
         '{$email}',
         '{$telefone}')";

         $res=$conn->query($sql);
         
         header("Location: ../secretaria/Asec.php");
         break;


         }
         break;
        };
?>