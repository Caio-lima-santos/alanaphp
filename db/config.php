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
  <div class='container'>
  <div class='col-md-6 offset-md-3'>
<h3 class='text text-uppercase'>O que será listado?</h3>
 </div>
<form action='{$action}'>
<div class='form-group'>
<input type='hidden' name='page' value='listar' >
<input type='hidden' name='func' value='{$func}' >

";

if( $func=='adiministrador')
echo"
<div class='col-md-6 offset-md-3'>
<input type='radio' name='tipo' value='cliente' >Secretaria
</div>
";

if($func=='secretaria' || $func=='adiministrador')
echo"
<div class='col-md-6 offset-md-3'>
<input type='radio' name='tipo' value='cliente' >Clientes
</div>

<div class='col-md-6 offset-md-3'>
<input type='radio' name='tipo' value='servico' >Serviços
</div>
";


echo"
<div class='col-md-6 offset-md-3'>
<input type='radio' name='tipo' value='pet' >Pet's
</div>
";

echo"
<div class='col-md-6 offset-md-3'>
<button class='btn btn-primary'>Aplicar</button>
</div>
</div>
</form>
</div>
";




}

//fim listar
function excluir($action){
  

$access=@$_SESSION['func'];
switch(@$access){

    case"adiministrador":
    echo"
<div class='container'>
    <form action='{$action}' method='POST'>

      <div class='form-group'>
        <div class='col-md-6 offset-md-3'>
          <h3 class='text text-uppercase'>O que será excluido?</h3>
        </div>
        <div class='col-md-6 offset-md-3 form-check'>
              <input class='form-check-input' type='radio' name='tipo' value='cliente'/>Cliente
        </div>
                  <input class='form-check-input' type='hidden' name='page' value='excluir'>
                <div class='col-md-6 offset-md-3 form-check'>
                  <input class='form-check-input' type='radio' name='tipo' value='professor'>Professor
                </div>
                    <div class='col-md-6 offset-md-3 form-check'>
                        <input class='form-check-input' type='radio' name='tipo' value='pet'>Pet
                    </div>
                          <div class='col-md-6 offset-md-3'>
                              <label class='text-justify font-weight-bold text-uppercase'>Informe o nome</label>
                                    <input class='form-control' type='text' name='nome'>
                                      <br>
                                          <button class='btn btn-danger mb-2'>Excluir</button>
                          </div>
    </form> 
</div>
";
break;

case "secretaria":
    echo"
    <div class='container'>
        <form action='{$action}' method='POST'>
            <div class='form-group'>
            <div class='col-md-6 offset-md-3'>
                <h3 class='text text-uppercase font-weight-bold'>O que será excluído?</h3>
            </div>
                      <input type='hidden' name='page' value='excluir'>
                          <div class='col-md-6 offset-md-3'>
                              <input class='form-check-input' type='radio' name='tipo' value='cliente'/>Cliente
                          </div>
                              <div class='col-md-6 offset-md-3'>
                                  <input class='form-check-input' type='radio' name='tipo' value='pet'>Pet
                              </div>
                                  <div class='col-md-6 offset-md-3'>
                                    <label>Informe o nome</label>
                                        <input class='form-control' type='text' name='nome'>
                                        <br>
                                            <button class='btn btn-danger mb-2'>Excluir</button>
                                  </div>
            </div>
</form>
</div>
";

break;

case "cliente":

    echo"
  <div class='container'>
    <form action='{$action}' method='POST'>
    <div class='form-group'>
        <div class='col-md-6 offset-md-3'>
    <h3>O que você deseja excluir?</h3>
    </div>
    <input type='hidden' name='page' value='excluir'>
    <div class='col-md-6 offset-md-3'>
    <input class='form-check-input' type='radio' name='tipo' value='pet'>pet
    </div>
    <div class='col-md-6 offset-md-3'>
      <label>Informe o nome</label>
        <input type='text' name='nome'>
          <button class='btn btn-danger mb-2'>Excluir</button>
          </div>
</div>
</form> 
</div>
";

    break;
  
    }





}

function cadastrar($action){
 
$func=$_SESSION["func"];
$nome=$_SESSION["func"];

  
        switch($func){
        case 'secretaria':
     
        echo "
    <div class='container'>
        <form action='{$action}?page=cadastrar'>
            <div class='form-group'>
                  <div class='col-md-6 offset-md-3'>
                        <h3 class='text text-uppercase font-weight-bold'>Informe os dados para cadastro de clientes</h3>
                  </div>
                      <input type='hidden' name='tipo' value='cliente'>
                          <input type='hidden' name='func' value='cliente'>
                              <input type='hidden' name='action' value=''>
                                  <input type='hidden' name='page'value='cadastrar''>
                                        <input type='hidden' name='acao'value='editar'>
                  <div class='col-md-6 offset-md-3'>
                        <label class='form-label'>NOME</label>
                            <input type='text' class='form-control' name='nome'>
                  </div>
                      <div class='col-md-6 offset-md-3'>
                        <label class='form-label'>SOBRENOME</label>
                            <input type='text' class='form-control' name='sobrenome'>
                      </div>
                          <div class='col-md-6 offset-md-3'>
                              <label class='form-label'>EMAIL</label>
                                  <input type='text' class='form-control' name='email'>
                          </div>
                            <div class='col-md-6 offset-md-3'>
                                <label class='form-label'>TELEFONE</label>
                                    <input type='text' class='form-control' name='telefone'>
                            </div>
                                <div class='col-md-6 offset-md-3'>
                                  <label class='form-label' >CPF</label>
                                    <input type='text'  class='form-control'name='cpf'>
                                </div>
                                    <div class='col-md-6 offset-md-3'>
                                          <label class='form-label'>USUARIO</label>
                                              <input type='text' class='form-control' name='usuario'>
                                    </div>
                                        <div class='col-md-6 offset-md-3'>
                                            <label class='form-label'>SENHA</label>
                                                <input type='password' class='form-control' name='senha'>
                                        </div>
                                            <div class='col-md-6 offset-md-3'>
                                            <br>
                                                <button class='btn btn-primary mb-2'>Enviar</button>
</div>
</div>
</form>
</div>
";

echo"
<div class='container'>
<form action='{$action}?page=cadastrar'>
<div class='form-group'>
  <div class='col-md-6 offset-md-3'>
    <h3>Informe os dados para cadastro de pet's</h3>
    </div>
    <input type='hidden' name='tipo' value='pet'>
    <input type='hidden' name='func' value='pet'>
 
    <input type='hidden' name='page'value='cadastrar''>
    <input type='hidden' name='acao'value='editar'>

    <div class='col-md-6 offset-md-3'>
<label class='form-label'>RAÇA</label>
<input type='text' class='form-control' name='raca'>
</div>

<div class='col-md-6 offset-md-3'>
<label class='form-label'>TAMANHO</label>
<input type='text' class='form-control' name='tamanho'>
</div>

<div class='col-md-6 offset-md-3'>
<label class='form-label'>PESO</label>
<input type='text' class='form-control' name='peso'>
</div>

<div class='col-md-6 offset-md-3'>
<label class='form-label'>DONO</label>
<input type='text' class='form-control' name='dono'>
</div>
<br>
<div class='col-md-6 offset-md-3'>
<button class='btn btn-primary'>Enviar</button>

</div>
</div>
</form>
</div>
";
     break;
     

    case 'adiministrador':

        echo "<div class='form-control'>
        <form action='{$action}?page=cadastrar'>
      <div class='row'>
        <div class='col'>
        <h3>Informe os seguintes dados</h3>
   
      <input type='hidden' name='tipo' value='secretaria'>
      <input type='hidden' name='page'value='cadastrar''>
  
      <label>NOME</label>
      <br>
      <input class='form-label' type='text' name='nome'>
      <br>
      
      <label>SOBRENOME</label>
      <br>
      <input class='form-label' type='text' name='sobrenome'>
      <br>
      
      <label>EMAIL</label>
      <br>
      <input class='form-label' type='email' name='email'>
      <br>
      
      <label>TELEFONE</label>
      <br>
      <input class='form-label' type='text' name='telefone'>
      <br>
      
      <label>CPF</label>
      <br>
      <input class='form-label' type='text'name='cpf'>
      <br>
      <label>USUÁRIO</label>
      <br>
      <input class='form-label' type='text' class='form-control' name='usuario'>
      <br>
      
      <label>SENHA</label>
      <br>
      <input class='form-label' type='password' class='form-control'  name='senha'>
      <br>
      
      <button class='btn btn-primary'>Enviar</button>
      
      </div>
      </form>";
    break;


    case"cliente":
       echo" <div>
        <form action='{$action}?page=cadastrar'>
      <h3>ensira os dados</h3>
   <br> <br>
      <input type='hidden' name='tipo' value='pet'>
      <input type='hidden' name='page'value='cadastrar''>
  
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


function editar($action){

    $func=$_SESSION["func"];
  
      
            switch($func){


            case 'secretaria':
            echo "
    
            <div class='container'>
          <form action='{$action}?page=cadastrar'>
          <div class='form-group'>
          <div class='col-md-6 offset-md-3'>
        <h3>Informe os dados</h3>
              </div>
        <input type='hidden' name='tipo' value='cliente'>
        <input type='hidden' name='func' value='cliente'>
        <input type='hidden' name='action' value=''>
        <input type='hidden' name='page' value='editar'>
        <input type='hidden' name='acao'value='editar'>
    
        <div class='col-md-6 offset-md-3'>
        <label class='form-label'>NOME</label>
      <input required type='text' class='form-control' name='nome'>
    </div>
    
    <div class='col-md-6 offset-md-3'>
    <label class='form-label'>SOBRENOME</label>
    <input required type='text' class='form-control' name='sobrenome'>
    </div>
    
    <div class='col-md-6 offset-md-3'>
    <label class='form-label'>EMAIL</label>
    <input required type='text' class='form-control' name='email'>
    </div>
    
    
    <div class='col-md-6 offset-md-3'>
    <label class='form-label'>TELEFONE</label>
    <input required type='text' class='form-control' name='telefone'>
    </div>
    
    <div class='col-md-6 offset-md-3'>
    <label class='form-label'>CPF</label>
    <input required type='text'  class='form-control'name='cpf'>
    </div>
    
    <div class='col-md-6 offset-md-3'>
    <label class='form-label'>USUARIO</label>
    <input required type='text' class='form-control' name='usuario'>
    </div>
    
    <div class='col-md-6 offset-md-3'>
    <label class='form-label' >SENHA</label>
    <input required type='password' class='form-control'  name='senha'>
    </div>
    <br>
    <div class='col-md-6 offset-md-3'>
    <button class='btn btn-primary'>Enviar</button>
    
    </div>
    </div>
    </form>
    </div>
    ";
         break;
         
    
        case 'adiministrador':
    
            echo "<div>
            <form action='{$action}?page=cadastrar'>
          <h3>ensira os dados</h3>
       <br> <br>
          <input type='hidden' name='tipo' value='secretaria'>
          <input type='hidden' name='page' value='editar'>
      
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
          <input type='hidden' name='page' value='editar'>
      
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