<?php 
	  include ("inicio.php");
	  include("conexao.php");
			if(isset($_GET['id']))
		{
			$id=$_GET['id'];
			
			$sql = "select * from produtos where id='$id'";
			
			$resultado = $conexao->query($sql);
			
			$linha = $resultado->fetch_object();
		}
?>
<script src="../ckeditor/ckeditor.js"></script>
<script type="text/javascript">
    function moeda(z){
            v = z.value;
            v=v.replace(/\D/g,"") // permite digitar apenas numero
            v=v.replace(/(\d{1})(\d{14})$/,"$1.$2") // coloca ponto antes dos ultimos digitos
            v=v.replace(/(\d{1})(\d{11})$/,"$1.$2") // coloca ponto antes dos ultimos 11 digitos
            v=v.replace(/(\d{1})(\d{8})$/,"$1.$2") // coloca ponto antes dos ultimos 8 digitos
            v=v.replace(/(\d{1})(\d{5})$/,"$1.$2") // coloca ponto antes dos ultimos 5 digitos
            v=v.replace(/(\d{1})(\d{1,2})$/,"$1,$2") // coloca virgula antes dos ultimos 2 digitos
            z.value = v;
    }
    
     
    function somenteNumeros(num) {
        var er = /[^0-9.]/;
        er.lastIndex = 0;
        var campo = num;
        if (er.test(campo.value)) {
          campo.value = "";
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
                  
                  <form action="confirmaAlterarProduto.php" method="post" enctype="multipart/form-data" align="auto">
					<div class="form-group">
                      <label>ID do usuário</label>
					  <?php echo "ID: <input name=\"id\" readonly=\"true\" type=\"text\" value=\"$linha->id\" class='form-control'>";?>
                      
                    </div>
					
                    <div class="form-group">
                      <label>Nome do usuário</label>
                      <input type="text" placeholder="Nome Completo" value="<?php echo $linha->nome;?>" name="nome" class="form-control">
                    </div>
					
					<div class="form-group">
                      <label>Valor do produto</label>
                      <input type="text" placeholder="Valor do produto" value="<?php echo $linha->valor; ?>" name="valor" id="valor" class="form-control" onkeyup="moeda(this);">					  
                    </div>				
					<div class="form-group">
                        <label>Quantidade no estoque</label>
					<input type="text" placeholder="Quantidade em estoque" value="<?php echo $linha->quantidade;?>" name="quantidade" onkeyup="somenteNumeros(this);" maxlength="7" class="form-control">				
					</div>
                    <div class="form-group">
                        <label>Quantidade Mínima para venda</label>
					<input type="text" placeholder="Quantidade miníma para venda" value="<?php echo $linha->quantidade_minima;?>" name="quantidade_minima" onkeyup="somenteNumeros(this);" maxlength="7" class="form-control">				
					</div>
                      <div class="form-group">
                          <label>Descrição</label>

                            
                                <textarea name="descricao" id="editor1" rows="10" cols="80">
                                        <?php echo $linha->descricao; ?>
                                </textarea>
                                <script>
                                    // Replace the <textarea id="editor1"> with a CKEditor
                                    // instance, using default configuration.
                                    CKEDITOR.replace( 'editor1' );
                                </script>
                            
                    </div>
                      <?php
                      
                      if($linha->disponivel == "S")
                      {
                          echo "<div class=\"form-group\">
                        <label>Produto está disponível?</label>
                        
                        <div>
                          <input id=\"disponivel\" type=\"radio\"  value=\"S\" checked=\"checked\" name=\"disponivel\">
                          <label for=\"disponivel\">Sim</label>
                        </div>
                       <div>
                          <input id=\"disponivel\" type=\"radio\"  value=\"N\"   name=\"disponivel\">
                          <label for=\"disponivel\">Não</label>
                        </div>
                      </div>";
                      }
                      else
                      {
                          echo "<div class=\"form-group\">
                        <label>Produto está disponível?</label>
                        
                        <div>
                          <input id=\"disponivel\" type=\"radio\"  value=\"S\"  name=\"disponivel\">
                          <label for=\"disponivel\">Sim</label>
                        </div>
                       <div>
                          <input id=\"disponivel\" type=\"radio\"  value=\"N\" checked=\"checked\"  name=\"disponivel\">
                          <label for=\"disponivel\">Não</label>
                        </div>
                      </div>";
                      }
                      
                      
                      
                      ?>
                      
                   
					
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