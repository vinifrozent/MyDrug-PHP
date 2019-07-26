<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login Mydrug</title>
  
   <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="../js/index.js"></script>
  
      <link rel="stylesheet" href="../css/estilo.css">

  
</head>

<body>
  <div class="login-page">
  <div class="form">
    
  <h2>Autenticação de Usuário</h2>
  <form action="confirmalogin.php" method="post">
    <div class="form-group">
     
      <input type="text" class="form-control" name="Usuario" id="Usuario" placeholder="Informe o login">
    </div>
    <div class="form-group">
   
      <input type="password" class="form-control" name="Senha"id="Senha" placeholder="Informe a Senha">
    </div>
	<br>
    <button type="submit" class="btn btn-success">Confirma</button>
  </form>
      <p class="message">Não é registrado? <a href="cadastre_se.php">Criar uma conta</a></p>
	  <p class="message"><a href="index.php"> Voltar para tela inicial </a></p>
    
  </div>
</div>
 

</body>
</html>
