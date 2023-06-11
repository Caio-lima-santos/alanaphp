<h3>relatorio</h3>
<?php
$sql1="SELECT * FROM cliente";
$sql2="SELECT * FROM servico";
$sql3="SELECT * FROM pet";

$res1=$conn->query($sql1);
$res2=$conn->query($sql2);
$res3=$conn->query($sql3);

echo"<div><h4>Pessoas</h4>";

echo "<table class='table table-hover 
table-striped table-bordered'>";
echo"<tr>";
echo  "<th>nome</th>";
echo  "<th>cpf</th>";
echo  "<th>usuario</th>";
echo  "<th>função</th>";
echo  "<th>telefone</th>";

while($row=$res1->fetch_object())
{

    echo "<tr><td><label>nome:</label> {$row->nome}<br></td>";
    echo "<td><label>cpf:</label> {$row->cpf}<br></td>";
    echo "<td><label>usuario:</label> {$row->usuario}<br></td>";
    echo "<td><label>funcão:</label> {$row->func}<br></td>";
    echo "<td><label>telefone:</label> {$row->telefone}</td></tr><br><br>";


}
echo"</table>";
echo"</div><br>";






echo"<div><h4>Serviços</h4>";

echo "<table class='table table-hover 
table-striped table-bordered'>";
echo"<tr>";
echo  "<th>nome</th>";
echo  "<th>descrição</th>";
echo  "<th>tipo</th>";
echo  "<th>valor</th>";
echo  "<th>desconto</th>";


while($row=$res2->fetch_object())
{

    echo "<tr><td><label>nome:</label> {$row->nome}<br></td>";
    echo "<td><label>descricao:</label> {$row->descrição}<br></td>";
    echo "<td><label>tipo:</label> {$row->tipo}<br></td>";
    echo "<td><label>valor:</label> {$row->valor}<br></td>";
    echo "<td><label>valor:</label> {$row->desconto}<br></td>";



}
echo"</table>";
echo"</div><br>";





echo"<div><h4>Pets</h4>";

echo "<table class='table table-hover 
table-striped table-bordered'>";
echo"<tr>";
echo  "<th>raca</th>";
echo  "<th>tamanho</th>";
echo  "<th>dono</th>";


while($row=$res3->fetch_object())
{

    echo "<tr><td><label>raca:</label> {$row->raca}<br></td>";
    echo "<td><label>tamanho:</label> {$row->tamanho}<br></td>";
    echo "<td><label>dono:</label> {$row->dono}<br></td>";



}
echo"</table>";
echo"</div>";

$sql="SELECT * FROM cliente WHERE nome='petshop'";
$res=$conn->query($sql);
$row=$res->fetch_object();

echo"<h3>valor arecadado pelo pet shop</h3><br>";

echo"<h5>valor:{$row->dinheiro}</h5>";


?>



