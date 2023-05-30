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

function listar($deOnde,$conn){
    
    $sql="SELECT  * FROM {$deOnde}" ;

    $res=$conn->query($sql);

    if($res != NULL){
    switch($deOnde){

    case "pessoas" :
       
        echo "<h1>Dados Das {$deOnde}</h1>";
        echo "<table 
        class='table table-hover table-striped table-bordered'>";
        echo"<tr>";
        echo  "<th>nome</th>";
        echo  "<th>usuario</th>";
        echo  "<th>senha</th>";
        echo  "<th>função</th>";
    break;

    case "assuntos" :
        echo "<h1>Dados Dos {$deOnde}</h1>";
        echo "<table 
        class='table table-hover table-striped table-bordered'>";
        echo"<tr>";
        echo  "<th>comando da questao</th>";
        echo  "<th>Diciplina</th>";
        echo  "<th>Dificuldade</th>";
        echo  "<th>codigo</th>";
        break;
      
    case "diciplinas" :
       
        echo "<h1>Dados Das {$deOnde}</h1>";
        echo "<table 
        class='table table-hover table-striped table-bordered'>";
        echo"<tr>";
        echo  "<th>nome</th>";
       
        break;
    
    case "provas" :
        echo "<h1>Dados Das {$deOnde}</h1>";
        echo "<table 
        class='table table-hover table-striped table-bordered'>";
        echo"<tr>";
        echo  "<th>nome</th>";
        echo  "<th>professor</th>";
        echo  "<th>numquestoes</th>";
       
        break;
    
         default:
            break;
       
   }





    while($row=$res->fetch_object())
    {
   switch($deOnde){

    case "pessoas" :
       
        echo "<tr><td>  {$row->nome}  </td>";
        echo "<td>  {$row->usuario}  </td>";
        echo "<td>  {$row->senha}  </td>";
        echo "<td>  {$row->funcao}   </td>";
       
        break;


    case "assuntos" :
       
        echo "<tr><td>  {$row->asunto}  </td>";
        echo "<td>  {$row->diciplina}  </td>";
        echo "<td>  {$row->dificuldade}  </td>";
        echo "<td>  {$row->cod}  </td>";
       
        break;

    case "diciplinas" :
       
        echo "<tr><td>  {$row->nome}  </td>";
       
        break; 
    
    
    case "provas" :
       
        echo "<tr><td>  {$row->nome}  </td>";
        echo "<td>  {$row->professor}  </td>";
        echo "<td>  {$row->numquestoes}  </td>";
       
        break;

        default:
        
            break;
        
   }
    }
    echo "</table>";
    }}

//fim listar
function excluir($deOnde,$conn,$cond){
  
    
  
    $sql="DELETE FROM {$deOnde} WHERE nome='{$cond}'";
    return ($conn->query($sql));
    }

function cadastrar($deOnde,$conn,$action){
     


  
        switch($deOnde){
        case 'cliente':
    
        echo "

        <div>
      <form action='{$action}?page=cadastrar'>
    <h3>ensira os dados</h3>
 <br> <br>
    <input type='hidden' name='tipo' value='cliente'>
    <input type='hidden' name='action' value=''>
    <input type='hidden' name='page' value='cadastrar'>

        <label for=''>usuario</label>
    <input type='text' name='usuario'>
    <br>
    <label for=''>senha</label>
    <input type='text' name='senha'>
    <br>
    <label for=''>nome completo</label>
    <input type='text' name='nome'>
    <br>
    <label for=''>cpf</label>
    <input type='text' name='cpf'>
    <br>
    <label for=''>email</label>
    <input type='text' name='email'>
    <br>

    <label for=''>telefone</label>
    <input type='text' name='telefone'>

    <br>
    <button>enviar</button>
    </form>
    </div>"
    ;



    break;

    case 'secretaria':




    break;

    default:
    break;




        }
}    
?>



