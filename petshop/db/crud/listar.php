       
      <?php           
    $sql="SELECT  * FROM {$_REQUEST['tipo']}" ;

$res=$conn->query($sql);

if($res != NULL){
switch($_REQUEST['tipo']){

case "cliente" :
   
    echo "<h1>Dados Dos {$_REQUEST['tipo']}</h1>";
    echo "<table 
    class='table table-hover table-striped table-bordered'>";
    echo"<tr>";
    echo  "<th>nome</th>";
    echo  "<th>usuario</th>";
    echo  "<th>senha</th>";
    echo  "<th>função</th>";
break;

case "assuntos" :
    echo "<h1>Dados Dos {$_REQUEST['tipo']}</h1>";
    echo "<table 
    class='table table-hover table-striped table-bordered'>";
    echo"<tr>";
    echo  "<th>comando da questao</th>";
    echo  "<th>Diciplina</th>";
    echo  "<th>Dificuldade</th>";
    echo  "<th>codigo</th>";
    break;
  
case "diciplinas" :
   
    echo "<h1>Dados Das {$_REQUEST['tipo']}</h1>";
    echo "<table 
    class='table table-hover table-striped table-bordered'>";
    echo"<tr>";
    echo  "<th>nome</th>";
   
    break;

case "provas" :
    echo "<h1>Dados Das {$_REQUEST['tipo']}</h1>";
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