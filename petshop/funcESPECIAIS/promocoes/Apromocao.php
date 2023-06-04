<h3>cadastrar promocoes</h3>

<h4>promoção no servico de:</h4>
<form action='./../funcESPECIAIS/promocoes/Vpromocao.php' method='POST'>
<input type="radio" name="tipo" value="limpeza">limpeza
<br>
<input type="radio" name="tipo" value="estilo">estilo
<br>
<input type="radio" name="tipo" value="saude">saude

<br>
<label for="">valor</label>
<input type="number"name="valor" >
<br>
<button>cadastrar</button>
</form>