<?php include("inicio.php"); ?>
<script type="text/javascript">
 function mascara(t, mask){
 var i = t.value.length;
 var saida = mask.substring(1,0);
 var texto = mask.substring(i)
 if (texto.substring(0,1) != saida){
 t.value += texto.substring(0,1);
 }
 }
</script>

      <div class="breadcrumb-holder">
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active">Forms</li>
          </ul>
        </div>
      </div>
      <section class="forms">
        <div class="container-fluid">
          <header> 
            <h1 class="h3 display">Cadastro usuário</h1>
          </header>
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-header d-flex align-items-center">
                  <h2 class="h5 display display">Preencha os campos com o que se pede</h2>
                </div>
                <div class="card-block">
                  
                  <form action="confirmaUsuario.php" method="post" enctype="multipart/form-data" align="auto">
                    <div class="form-group">
                      <label>Nome do usuário</label>
                      <input type="text" placeholder="Nome Completo" name="nome" class="form-control">
                    </div>
					
					<div class="form-group">
                      <label>Telefone do usuário</label>
                      <input type="text" placeholder="Telefone" name="telefone" id="telefone" class="form-control" onkeypress="mascara(this, '## ####-####')" maxlength="12">					  
                    </div>
                      <div class="form-group">
                      <label>Endereço:</label>
                      <input type="text" placeholder="Endereço" name="endereco" class="form-control">
                    </div>
                      <div class="form-group">
                      <label>Número da casa ou bloco</label>
                      <input type="text" placeholder="Número" name="num" class="form-control">
                    </div>
                      <div class="form-group">
                      <label>Bairro</label>
                      <input type="text" placeholder="Bairro" name="bairro" class="form-control">
                    </div>
                      <div class="form-group">
                      <label>Cidade:</label>
                      <input type="text" placeholder="Cidade" name="cidade" class="form-control">
                    </div>
					
					<div class="form-group">
                      <label>E-mail</label>
                      <input type="email" placeholder="E-mail" name="email" class="form-control">
                    </div>
					<div class="form-group">
					<div class="form-group">
					<label> Escolha a foto de perfil</label>
					  <div style="position:relative;">
						<a class='btn btn-primary' href='javascript:;'>
						Clique aqui
						<input type="file" accept="image/*"style='position:absolute;z-index:2;top:0;left:0;filter: alpha(opacity=0);-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0;background-color:transparent;color:transparent;' name="foto" size="40"  onchange='$("#upload-file-info").html($(this).val());'>
						</a>
						&nbsp;
						<span class='label label-info' id="upload-file-info"></span>
						</div>					
					</div>
                        <label>Nível de privilégio</label>
                      <div class="form-group">
                        
                        
                        <div>
                          <input id="nivel" type="radio"  value="Cliente" checked="checked" name="nivel">
                          <label for="nivel">Cliente</label>
                        </div>
                          <div>
                          <input id="nivel" type="radio"  value="Farmacia" name="nivel">
                          <label for="nivel">Farmácia</label>
                        </div>
                          <div>
                          <input id="nivel" type="radio"  value="HomeCare" name="nivel">
                          <label for="nivel">Home Care</label>
                        </div>
                          <div>
                          <input id="nivel" type="radio"  value="Admin" name="nivel">
                          <label for="nivel">Administrador</label>
                        </div>
											
                      </div>
                      <label>Login do usuário</label>
                      <input type="text" placeholder="Login" name="login" class="form-control">
                    </div>
					
                    <div class="form-group">       
                      <label>Password</label>
                      <input type="password" placeholder="Senha" name="senha"class="form-control">
                    </div>
					
                    <div class="form-group">       
                      <input type="submit" value="Enviar" class="btn btn-primary">
                    </div>
                  </form>
                </div>
              </div>
            </div>

      </section>
      
  <?php include("fim.php"); ?>