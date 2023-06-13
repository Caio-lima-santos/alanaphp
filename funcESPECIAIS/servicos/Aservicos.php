<div class="container">
<div class="conta">
<form action='./../funcESPECIAIS/servicos/Vservicos.php' method='POST'>
<div class="form-group">
    <div class="col-md-6 offset-md-3">
<h3 class="fw-bold">Cadastrar serviço</h3>
</div>

<div class="col-md-6 offset-md-3 form-check">
<input class="form-check-input" type="radio" name="tipo" value="limpeza">Limpeza
</div>

<div class="col-md-6 offset-md-3 form-check">
<input class="form-check-input" type="radio" name="tipo" value="estilo">Estilo
</div>

<div class="col-md-6 offset-md-3 form-check">
<input class="form-check-input" type="radio" name="tipo" value="saude">Saúde
</div>

<div class="col-md-6 offset-md-3">
<label class="fs-5 fw-normal">Nome</label>
<input required placeholder="Informe o nome" class="form-control" type="text"name="nome" >
</div>

<div class="col-md-6 offset-md-3">
<label class="fs-5" for="">Descrição</label>
<input placeholder="Informe a descrição do produto" class="form-control" type="text"name="descricao" >
</div>

<div class="col-md-6 offset-md-3">
<label class="fs-5" for="">para:</label>
<input required placeholder="Informe para que pet" class="form-control" type="text"name="para" >
</div>

<div class="col-md-6 offset-md-3">
<label class="fs-5" for="">Valor:</label>
<input required placeholder="Informe o valor" class="form-control" type="text"name="valor" >
</div>

<br>

<div class="d-grid gap-2 col-md-6 offset-md-3">
<button class="btn btn-primary">Cadastrar</button>
</div>

</div>
</form>
</div>
</div>