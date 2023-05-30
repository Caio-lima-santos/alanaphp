
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
        manipular clientes
      </a>
      <ul class='dropdown-menu'>
        
";


echo"
<form action='./sla/sec.php' method='POST'>

<input type='radio' name='Muser' value='cadastrar' />cadastrar

<input type='radio' name='Muser' value='excluir' />excluir

<input type='radio' name='Muser' value='editar' />editar

<input type='radio' name='Muser' value='listar' />listar

<button>ativar</button>

</form>";

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


switch($_SESSION["Muser"]){
    case "cadastrar":
      cadastrar("cliente",$conn,"../db/cad.php?page=cadastrar");
      break;
  
      default:
      break;
    }
echo"



<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js' integrity='sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN' crossorigin='anonymous'></script>
    
<link rel='stylesheet' type='text/css' href='c.css' media='screen' />

</body>
</html>";


?>



