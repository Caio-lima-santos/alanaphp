<?php



switch(@$_REQUEST["pet"]){

case "filtro":
    echo"<h4>Você está visualizando serviços para {$_REQUEST['raca']}";
    break;


}







if(@$_REQUEST['raca']!=null){$sql="SELECT * FROM servico WHERE para='{$_REQUEST['raca']}'";}
else{$sql="SELECT * FROM servico ";}
$res=$conn->query($sql);
if($res){
echo"<h3>Solicitação de serviços</h3>";
echo "<table class='table table-hover 
table-striped table-bordered'>";
echo"<tr>";
echo  "<th>Serviço </th>";
echo  "<th>Valor com desconto</th>";
echo  "<th>Descrição</th>";
echo  "<th>Raça</th>";
echo  "<th>Solicitar</th>";

$tipo=' ';
//bug nao resolvido so mostra servico de um tipo de estrutura por vez
while($rowServico=$res->fetch_object()){
 
$val=$rowServico->valor-($rowServico->valor*$rowServico->desconto);
 if($rowServico->tipo){


   $val= (($rowServico->valor)-($rowServico->valor)*($rowServico->desconto));
    echo "<form action='./action/Vconsultar.php?Muser=consultar' method='POST'>";
    echo "<tr><td><label>serviço:</label> {$rowServico->nome}<br></td>";
    echo "<td><label></label> {$val}<br></td>";
    echo "<td><label></label> {$rowServico->descrição}<br></td>";
    echo "<td><label></label> {$rowServico->para}<br></td>";
    echo "<input type='hidden' name='id' value='{$rowServico->nome}'>";
    echo "<input type='hidden' name='valor' value='{$rowServico->valor}'>";
    echo "<td><label></label>" ;

    if(@$_SESSION[$rowServico->tipo]!='solicitado'){
    echo" <button class='btn btn-warning'>Solicitar<br>";
    }else{
    echo" <button>Desfazer solicitação<br>"; 
  
    }
    echo "</form>";
}}}
else{
    
    echo"<h1>Reserve algo antes de entrar nessa página</h1>";
    }
  

echo"</table>";


echo " <h3>Selecione seu pet para filtrar os servicos</h3>";




$sql="SELECT * FROM pet WHERE dono='{$_SESSION['nome']}'";
$res=$conn->query($sql);
if($res){

echo "<table class='table table-hover 
table-striped table-bordered'>";
echo"<tr>";
echo  "<th>Raça </th>";
echo  "<th>Tamanho </th>";
echo  "<th>Peso</th>";
echo  "<th><label></label></th>"; 



//bug nao resolvido so mostra servico de um tipo de estrutura por vez
while($rowServico=$res->fetch_object()){
 


    echo "<form action='?pet=filtro&Muser=consultar' method='POST'>";
    echo "<tr><td><label>serviço:</label> {$rowServico->raca}<br></td>";
    echo "<td><label></label> {$rowServico->tamanho}<br></td>";
    echo "<td><label></label>{$rowServico->peso}<br></td>";
    echo "<input type='hidden' name='raca' value='{$rowServico->raca}'></td>";
    echo "<td><label></label><button class='btn btn-warning'>Usar</button><br></td>";

    echo "</form>";
}}
else{
    
    echo"<h1>Você não possui nenhum pet cadastrado<br></h1> <h3>Consulte uma de nossas secretarias para cadastrar um pet</h3>";
    }
  

echo"</table>";

?>