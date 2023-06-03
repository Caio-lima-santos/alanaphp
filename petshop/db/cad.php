<?php
session_start();
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
         $func= $_REQUEST["func"];

         $sql="INSERT INTO cliente(id,usuario,senha,nome,cpf,email,telefone,func)
         values('',
         '{$usuario}',
         '{$senha}',
         '{$nome}',
         '{$cpf}',
         '{$email}',
         '{$telefone}',
         '{$func}')";

         $res=$conn->query($sql);
         
         header("Location: ../secretaria/Asec.php");
         break;


            }
                break;

         case "excluir":
                // if($_REQUEST['tipo'==" "])
                 //  { 
                  $sql="DELETE FROM {$_REQUEST['tipo']} WHERE nome='{$_REQUEST['nome']}'";
               $res= $conn->query($sql);
              
               if($res){echo"certo"; header("Location: ../secretaria/Asec.php");
                }else{echo"erro";}
               
                  // }else{
                        break;

        case 'listar':
      
         $_SESSION["acao"]="listar";  
         $_SESSION["tipoL"]=$_REQUEST["tipo"];
         switch(@$_REQUEST["func"])
         {
             
        case "administrador":
            header("Location: ../administrador/Aadm.php");
            break;
    
                
            case "cliente":
                header("Location: ../cliente/Acli.php");
                break;
    
                
            case "secretaria":
            header("Location: ../secretaria/Asec.php");
            break;
    

         }
         break;
        }
   
?>