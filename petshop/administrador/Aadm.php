
<?php
session_start();

include("../db/config.php");

echo "
<!doctype html>
<html lang='pt-br'>
  <head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    
    <title>Bootstrap</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD' crossorigin='anonymous'>
  </head>
  <body>

";


//inicio da nav bar
echo"


<nav class='navbar navbar-expand-lg bg-body-tertiary'>
  <div class='container-fluid'>
    <a class='navbar-brand' href='#'>PET SHOP</a>
    <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarNavDropdown2' aria-controls='navbarNavDropdown2' aria-expanded='false' aria-label='Toggle navigation'>
      <span class='navbar-toggler-icon'></span>
    </button>
<div class='collapse navbar-collapse' id='navbarNavDropdown2'>
      <ul class='navbar-nav'>
        <li class='nav-item'>
        <a class='nav-link dropdown-toggle' href='#' role='button' data-bs-toggle='dropdown' aria-expanded='false'>
        manipular pessoas
      </a>
      <ul class='dropdown-menu'>
        
";


echo"

<h4>como sera manipulado?</h4>
<br>
<form action='./sla/sec.php' method='POST'>
<div class='mb-3'>
<input type='radio' name='Muser' value='cadastrar' />cadastrar

<input type='radio' name='Muser' value='excluir' />excluir

<input type='radio' name='Muser' value='editar' />editar

<input type='radio' name='Muser' value='listar' />listar
</div>
<button>ativar</button>

</form>";

//nav manipular fins
echo"
</form>
</ul>
</li>
<li class='nav-item'>
<a class='nav-link dropdown-toggle' href='#' role='button' data-bs-toggle='dropdown' aria-expanded='false'>
outras funções
</a>
<ul class='dropdown-menu'>




<h4>escolha uma função</h4>
<br>
<form action='./sla/sec.php' method='POST'>
<div class='mb-3'>
<input type='radio' name='Mfunc' value='servicos' />serviços

<input type='radio' name='Mfunc' value='promocoes' />promoções

<input type='radio' name='Mfunc' value='relatorio' />relatorio

</div>
<button>ativar</button>

</form>

";

echo"
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
  
      default:
      break;
    }
  


switch(@$_SESSION["acao"]){


    case "listar":
    if(true){
      if($_SESSION["func"]=="adiministrador"){          
     $sql="SELECT  * FROM {$_SESSION['tipoL']}" ;
      }else{
        $sql="SELECT  * FROM {$_SESSION['tipoL']} WHERE func='cliente' || func='pet'" ;

      }
       $res=$conn->query($sql);
  
       if($res != NULL){
       switch(@$_SESSION['tipoL']){
  
      case "cliente" :
         
          echo "<h1>Dados Dos {$_SESSION['tipoL']}</h1>";
          echo "<table 
          class='table table-hover table-striped table-bordered'>";
          echo"<tr>";
          echo  "<th>nome</th>";
          echo  "<th>usuario</th>";
          echo  "<th>senha</th>";
          echo  "<th>função</th>";
      break;
  
      case "assuntos" :
          echo "<h1>Dados Dos {$_SESSION['tipoL']}</h1>";
          echo "<table 
          class='table table-hover table-striped table-bordered'>";
          echo"<tr>";
          echo  "<th>comando da questao</th>";
          echo  "<th>Diciplina</th>";
          echo  "<th>Dificuldade</th>";
          echo  "<th>codigo</th>";
          break;
        
      case "diciplinas" :
         
          echo "<h1>Dados Das {$_SESSION['tipoL']}</h1>";
          echo "<table 
          class='table table-hover table-striped table-bordered'>";
          echo"<tr>";
          echo  "<th>nome</th>";
         
          break;
      
      case "provas" :
          echo "<h1>Dados Das {$_SESSION['tipoL']}</h1>";
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
     switch(@$_SESSION['tipoL']){
  
      case "cliente" :
         
          echo "<tr><td>  {$row->nome}  </td>";
          echo "<td>  {$row->usuario}  </td>";
          echo "<td>  {$row->senha}  </td>";
          echo "<td>  {$row->func}   </td>";
         
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
  
    }    
           }

          break;
          
          }
      $_SESSION["acao"]="nao";

switch(@$_SESSION["Mfunc"]){
    case "servicos":
        echo"aqui";
        break;
}



    
     
echo"



<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js' integrity='sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN' crossorigin='anonymous'></script>
    
<link rel='stylesheet' type='text/css' href='c.css' media='screen' />

</body>
</html>";


?>