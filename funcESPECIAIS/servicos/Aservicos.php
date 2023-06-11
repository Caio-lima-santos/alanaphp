<h3>cadastrar serviço</h3>

<form action='./../funcESPECIAIS/servicos/Vservicos.php' method='POST'>
<input type="radio" name="tipo" value="limpeza">limpeza
<input type="radio" name="tipo" value="estilo">estilo
<input type="radio" name="tipo" value="saude">saude

<br>
<label for="">nome</label>
<input type="text"name="nome" >
<br>
<label for="">descrição</label>
<input type="text"name="descricao" >
<br>
<label for="">valor</label>
<input type="text"name="valor" >

<button>cadastrar</button>
</form>