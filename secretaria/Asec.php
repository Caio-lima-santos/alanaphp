<?php
session_start();

include("../db/config.php");

echo "
<!doctype html>
<html lang='pt-br'>
  <head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    
    <title>Pet Shop | 1000 Patas</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD' crossorigin='anonymous'>
  </head>
  <body>

";


//inicio da nav bar
echo"


<nav class='navbar navbar-dark bg-primary border border-top-0 rounded-right'>
  <div class='container-fluid'>
    <a class='navbar-brand' href='#'>PET SHOP</a>
    <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarNavDropdown2' aria-controls='navbarNavDropdown2' aria-expanded='false' aria-label='Toggle navigation'>
      <span class='navbar-toggler-icon'></span>
    </button>
<div class='collapse navbar-collapse' id='navbarNavDropdown2'>
      <ul class='navbar-nav'>


      <li class='nav-item'>
      <a class='nav-link active' href='../login/login.php'>Sair</a>
      </li>
        <li class='nav-item'>
        <a class='nav-link dropdown-toggle' href='#' role='button' data-bs-toggle='dropdown' aria-expanded='false'>
        Clientes
      </a>
      <ul class='dropdown-menu'>
        
";


echo"
  <div class='container'>
<h4>Qual ação deseja executar?</h4>
<form action='./sla/sec.php' method='POST'>
<div class='form-group'>

<input type='radio' name='Muser' value='cadastrar' />Cadastrar

<input type='radio' name='Muser' value='excluir' />Excluir

<input type='radio' name='Muser' value='editar' />Editar

<input type='radio' name='Muser' value='listar' />Listar
</div>
<button class='btn btn-secondary'>Ativar</button>
</div>
</form>
</div>
";

//nav fins
echo"
</form>
</ul>
</li>
</ul>
</ul>
</div>
</div>
</nav>";


switch(@$_SESSION["Muser"]){
    case "cadastrar":
      cadastrar("../db/cad.php?page=cadastrar");
      break;
    
    case "listar":
       listar("../db/cad.php?page=cadastrar");
    break;

    case "excluir":

      excluir("../db/cad.php");
    break;

    case"editar":
       editar("../db/cad.php");
      break;
  
      default:
      break;
    }
    $_SESSION["Muser"]="nao";
  


switch(@$_SESSION["acao"]){


    case "listar":
    if(true){
      if($_SESSION["func"]=="adiministrador"){          
     $sql="SELECT  * FROM {$_SESSION['tipoL']}" ;
      }elseif($_SESSION['tipoL']=="pet" ||$_SESSION['tipoL']=="servico"){
        $sql="SELECT  * FROM {$_SESSION['tipoL']}";
      }else{
        $sql="SELECT  * FROM {$_SESSION['tipoL']} WHERE func='cliente' || func='pet'" ;

      }
       $res=$conn->query($sql);
  
       if($res != NULL){
       switch(@$_SESSION['tipoL']){
  
      case "cliente" :
         
          echo "<h1>Dados dos {$_SESSION['tipoL']}</h1>";
          echo "<table 
          class='table table-hover table-striped table-bordered'>";
          echo"<tr>";
          echo  "<th>Nome</th>";
          echo  "<th>Usuário</th>";
          echo  "<th>Dinheiro</th>";
          echo  "<th>Função</th>";
      break;
  
      case "pet" :
          echo "<h1>Dados dos {$_SESSION['tipoL']}</h1>";
          echo "<table 
          class='table table-hover table-striped table-bordered'>";
          echo"<tr>";
          echo  "<th>Raça</th>";
          echo  "<th>Tamanho</th>";
          echo  "<th>Dono(a)</th>";
         
          break;
        
      case "servico" :
         
          echo "<h1>Dados das {$_SESSION['tipoL']}</h1>";
          echo "<table 
          class='table table-hover table-striped table-bordered'>";
          echo"<tr>";
          echo  "<th>Nome</th>";
          echo  "<th>Descrição</th>";
          echo  "<th>Tipo</th>";
          echo  "<th>Valor</th>";
         
          break;
      
      case "provas" :
          echo "<h1>Dados das {$_SESSION['tipoL']}</h1>";
          echo "<table 
          class='table table-hover table-striped table-bordered'>";
          echo"<tr>";
          echo  "<th>Nome</th>";
          echo  "<th>Professor</th>";
          echo  "<th>Numquestoes</th>";
         
          break;
      
           default:

              break;
         
     }
        
  
      while($row=$res->fetch_object())
      {
     switch(@$_SESSION['tipoL']){
  
      case "cliente" :
         
          echo "<tr><td>  {$row->nome}  </td>";
          echo "<td>  {$row->usuario}  </td>";
          echo "<td>  {$row->dinheiro}  </td>";
          echo "<td>  {$row->func}   </td>";
         
          break;
  
  
      case "pet" :
         
          echo "<tr><td>  {$row->raca}  </td>";
          echo "<td>  {$row->tamanho}  </td>";
          echo "<td>  {$row->dono}  </td>";
    
         
          break;
  
      case "servico" :
         
          echo "<tr><td>  {$row->nome}  </td>";
          echo "<td>  {$row->descrição}  </td>";
          echo "<td>  {$row->tipo}  </td>";
          echo "<td>  {$row->valor}  </td>";
         
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
  
    }    
           }

          break;    
          }
      $_SESSION["acao"]="nao";
           
echo"

<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js' integrity='sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN' crossorigin='anonymous'></script>
    
<link rel='stylesheet' type='text/css' href='c.css' media='screen' />

</body>
</html>";


?>