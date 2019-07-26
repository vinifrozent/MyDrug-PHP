<?php 
	  include ("inicio.php");
	  include("conexao.php");
			if(isset($_GET['id']))
		{
			$id=$_GET['id'];
			
			$sql = "select * from usuarios where id='$id'";
			
			$resultado = $conexao->query($sql);
			
			$linha = $resultado->fetch_object();
		}
?>
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
	   <section class="forms">
        <div class="container-fluid">
          <header> 
            <h1 class="h3 display">Alterar usuário</h1>
          </header>
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-header d-flex align-items-center">
                  <h2 class="h5 display display">Preencha os campos com o que se pede</h2>
                </div>
                <div class="card-block">
                  
                  <form action="confirmaAlterarUsuario.php" method="post" enctype="multipart/form-data" align="auto">
					<div class="form-group">
                      <label>ID do usuário</label>
					  <?php echo "ID: <input name=\"id\" readonly=\"true\" type=\"text\" value=\"$linha->id\" class='form-control'>";?>
                      
                    </div>
					
                    <div class="form-group">
                      <label>Nome do usuário</label>
                      <input type="text" placeholder="Nome Completo" value="<?php echo $linha->nome;?>" name="nome" class="form-control">
                    </div>
					
					<div class="form-group">
                      <label>Telefone do usuário</label>
                      <input type="text" placeholder="Telefone" value="<?php echo $linha->telefone;?>"name="telefone" id="telefone" class="form-control" onkeypress="mascara(this, '## ####-####')" maxlength="12">
					  
                    </div>
					
					<div class="form-group">
                      <label>E-mail</label>
                      <input type="email" placeholder="E-mail" value="<?php echo $linha->email;?>"name="email" class="form-control">
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
                      <label>Login do usuário</label>
                      <input type="text" placeholder="Login" value="<?php echo $linha->login;?>"name="login" class="form-control">
                    </div>
					
                   
					
                    <div class="form-group">       
                      <input type="submit" value="Enviar" class="btn btn-primary">
                    </div>
                  </form>
                </div>
              </div>
            </div>
            </div>
           </div>

      </section>