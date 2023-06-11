
<div class="container">
<div class="col-md-6 offset-md-3">
<h3>Cadastrar promoções</h3>
</div>
<div class="col-md-6 offset-md-3">
<h4>Promoção no serviço de:</h4>
</div>

<form action='./../funcESPECIAIS/promocoes/Vpromocao.php' method='POST'>
<div class="form-group">
    <div class="col-md-6 offset-md-3">
<input type="radio" name="tipo" value="limpeza">Limpeza
    </div>
    <div class="col-md-6 offset-md-3">
    <input type="radio" name="tipo" value="estilo">Estilo
    </div>
    <div class="col-md-6 offset-md-3">
<input type="radio" name="tipo" value="saude">Saúde
    </div>

    <div class="col-md-6 offset-md-3">
<label for="">Valor: </label>
<input type="number"name="valor" >
<button>Cadastrar</button>

    </div>
</div>
</form>
</div>