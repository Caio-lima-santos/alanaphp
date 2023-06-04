<?php

$hostname="localhost";
$bancodedados="db_petshop";
$usuario="root";
$senha="";

$conn= new mysqli($hostname,$usuario,$senha,$bancodedados);

if($conn->connect_error){
    echo"falha ao connectar";
}else{

   // echo"sucesso ao conectar <br>";
}

function listar($action){


$func=$_SESSION['func'];

echo"
<br>
<h3>oque sera listado?</h3>
<br>
<form action='{$action}'>
<input type='hidden' name='page' value='listar' >
<input type='hidden' name='func' value='{$func}' >

";

if( $func=='adiministrador')
echo"
<input type='radio' name='tipo' value='cliente' >secretaria
<br>
";

if($func=='secretaria' || $func=='adiministrador')
echo"
<input type='radio' name='tipo' value='cliente' >clientes
<br>

<input type='radio' name='tipo' value='servico' >serviços
<br>
";


echo"
<input type='radio' name='tipo' value='pet' >pets
<br>
";

echo"
<br>
<button class='btn btn-primary'>aplicar</button>
</form>

";




}

//fim listar
function excluir($action){
  

$access=@$_SESSION['func'];
switch(@$access){

    case"adiministrador":
    echo"
    <form action='{$action}' method='POST'>


    <h3> oque sera exluido?</h3>
<input type='radio' name='tipo' value='cliente'/>cliente
<br>
<input type='hidden' name='page' value='excluir'>

<input type='radio' name='tipo' value='professor'>professor
<br>
<input type='radio' name='tipo' value='pet'>pet
<br>
<label>insira o nome</label>
<br>

<input type='text' name='nome'>

<button>excluir</button>

</form> ";
break;

case "secretaria":
    echo"
    <form action='{$action}' method='POST'>

<h3> oque sera exluido?</h3>
    <input type='hidden' name='page' value='excluir'>
    <br>
<input type='radio' name='tipo' value='cliente'/>cliente
<br>
<input type='radio' name='tipo' value='pet'>pet
<br>
<label>insira o nome</label>
<br>

<input type='text' name='nome'>
<br>
<button>excluir</button>

</form> ";

break;

case "cliente":

    echo"
    <form action='{$action}' method='POST'>


    <h3> oque sera exluido?</h3>
    <input type='hidden' name='page' value='excluir'>

<input type='radio' name='tipo' value='pet'>pet

<label>insira o nome</label>


<input type='text' name='nome'>

<button>excluir</button>

</form> ";

    break;
  
    }





}

function cadastrar($action){
 
$func=$_SESSION["func"];
$nome=$_SESSION["func"];

  
        switch($func){
        case 'secretaria':
     
        echo "

        <div>
      <form action='{$action}?page=cadastrar'>
    <h3>ensira os dados</h3>
 <br> <br>
    <input type='hidden' name='tipo' value='cliente'>
    <input type='hidden' name='func' value='cliente'>
    <input type='hidden' name='action' value=''>
    <input type='hidden' name='page' value='cadastrar'>
    <div >
    <input type='hidden' name='acao'value='cadastrar'>
<label class='form-label'>NOME</label>
<br>
<input type='text' class='form-control' name='nome'>
<br>
</div>

<div class='mb-3'>
<label class='form-label'>SOBRENOME</label>
<br>
<input type='text' class='form-control' name='sobrenome'>
<br>
</div>

<div class='mb-3'>
<label class='form-label'>email</label>
<br>
<input type='text' class='form-control' name='email'>
<br>
</div>


<div class='mb-3'>
<label class='form-label'>telefone</label>
<br>
<input type='text' class='form-control' name='telefone'>
<br>
</div>

<div class='mb-3'>
<label class='form-label' >CPF</label>
<br>
<input type='text'  class='form-control'name='cpf'>
<br>
</div>

<div class='mb-3'>
<label class='form-label'>USUARIO</label>
<br>
<input type='text' class='form-control' name='usuario'>
<br>
</div>

<div class='mb-3'>
<label class='form-label' >SENHA</label>
<br>
<input type='text' class='form-control'  name='senha'>
<br>
</div>




</div>
<div class='mb-3'>
<button  class='btn btn-primary' >enviar</button>

</div>
</div>
</form>";
     break;
     

    case 'adiministrador':

        echo "<div>
        <form action='{$action}?page=cadastrar'>
      <h3>ensira os dados</h3>
   <br> <br>
      <input type='hidden' name='tipo' value='secretaria'>
      <input type='hidden' name='page' value='cadastrar'>
  
      <label class='form-label'>NOME</label>
      <br>
      <input type='text' class='form-control' name='nome'>
      <br>
      </div>
      
      <div class='mb-3'>
      <label class='form-label'>SOBRENOME</label>
      <br>
      <input type='text' class='form-control' name='sobrenome'>
      <br>
      </div>
      
      <div class='mb-3'>
      <label class='form-label'>email</label>
      <br>
      <input type='text' class='form-control' name='email'>
      <br>
      </div>
      
      
      <div class='mb-3'>
      <label class='form-label'>telefone</label>
      <br>
      <input type='text' class='form-control' name='telefone'>
      <br>
      </div>
      
      <div class='mb-3'>
      <label class='form-label' >CPF</label>
      <br>
      <input type='text'  class='form-control'name='cpf'>
      <br>
      </div>
      
      <div class='mb-3'>
      <label class='form-label'>USUARIO</label>
      <br>
      <input type='text' class='form-control' name='usuario'>
      <br>
      </div>
      
      <div class='mb-3'>
      <label class='form-label' >SENHA</label>
      <br>
      <input type='text' class='form-control'  name='senha'>
      <br>
      </div>
      
      
      
      
      </div>
      <div class='mb-3'>
      <button  class='btn btn-primary' >enviar</button>
      
      </div>
      </div>
      </form>";
    break;


    case"cliente":
       echo" <div>
        <form action='{$action}?page=cadastrar'>
      <h3>ensira os dados</h3>
   <br> <br>
      <input type='hidden' name='tipo' value='pet'>
      <input type='hidden' name='page' value='cadastrar'>
  
      <label class='form-label'>NOME</label>
      <br>
      <input type='text' class='form-control' name='nome'>
      <br>
      </div>
      
      <div class='mb-3'>
      <label class='form-label'>SOBRENOME</label>
      <br>
      <input type='text' class='form-control' name='sobrenome'>
      <br>
      </div>
      
      <div class='mb-3'>
      <label class='form-label'>email</label>
      <br>
      <input type='text' class='form-control' name='email'>
      <br>
      </div>
      
      
      <div class='mb-3'>
      <label class='form-label'>telefone</label>
      <br>
      <input type='text' class='form-control' name='telefone'>
      <br>
      </div>
      
      <div class='mb-3'>
      <label class='form-label' >CPF</label>
      <br>
      <input type='text'  class='form-control'name='cpf'>
      <br>
      </div>
      
      <div class='mb-3'>
      <label class='form-label'>USUARIO</label>
      <br>
      <input type='text' class='form-control' name='usuario'>
      <br>
      </div>
      
      <div class='mb-3'>
      <label class='form-label' >SENHA</label>
      <br>
      <input type='text' class='form-control'  name='senha'>
      <br>
      </div>
      
      
      
      
      </div>
      <div class='mb-3'>
      <button  class='btn btn-primary' >enviar</button>
      
      </div>
      </div>
      </form>";
        break;
    default:
    break;




        }
}    
?>

