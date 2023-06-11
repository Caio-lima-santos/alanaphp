       
      <?php           
    $sql="SELECT  * FROM {$_REQUEST['tipo']}" ;

$res=$conn->query($sql);

if($res != NULL){
switch($_REQUEST['tipo']){

case "cliente" :
   
    echo "<h1>Dados dos {$_REQUEST['tipo']}</h1>";
    echo "<table 
    class='table table-hover table-striped table-bordered'>";
    echo"<tr>";
    echo  "<th>Nome</th>";
    echo  "<th>Usuário</th>";
    echo  "<th>Senha</th>";
    echo  "<th>Função</th>";
break;

case "assuntos" :
    echo "<h1>Dados dos {$_REQUEST['tipo']}</h1>";
    echo "<table 
    class='table table-hover table-striped table-bordered'>";
    echo"<tr>";
    echo  "<th>Comando da questão</th>";
    echo  "<th>Disciplina</th>";
    echo  "<th>Dificuldade</th>";
    echo  "<th>Código</th>";
    break;
  
case "diciplinas" :
   
    echo "<h1>Dados das {$_REQUEST['tipo']}</h1>";
    echo "<table 
    class='table table-hover table-striped table-bordered'>";
    echo"<tr>";
    echo  "<th>Nome</th>";
   
    break;

case "provas" :
    echo "<h1>Dados das {$_REQUEST['tipo']}</h1>";
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
switch($_REQUEST['tipo']){

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
  
    
?>