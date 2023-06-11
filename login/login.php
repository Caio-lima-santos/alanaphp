<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pet Shop | 1000 Patas</title>
  <link rel="stylesheet" href="../public/form.css">
</head>
<body>
  <div class="container">
    <div class="form">
      <h3 class="title">Que bom ter você de volta, cliente! Entre na sua conta aqui.</h3>
      <form action="loginP.php" method="POST">
        <div class="form-group">
          <input type="text" required name="usuario">
          <label>Usuário</label>
        </div>
        <div class="form-group">
          <input type="password" required name="senha">
          <label>Senha</label>
        </div>
        <button>Entrar</button>
      </form>
    </div>

  </div>
  
</body>
</html>