<?php include("inicio.php"); ?>

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
    function valida_form (){
    if(document.getElementById("nome").value == "")
    {
        //alert('Por favor, preencha o campo nome da empresa');
          swal({
          title: "Campo obrigatório",
          text: "Nome do produto está vazio!",
          icon: "error",
        });
        document.getElementById("nome").focus();
        return false
    }
    else if(document.getElementById("valor").value == "")
    {
        swal({
          title: "Campo obrigatório",
          text: "Valor do produto está vazio!",
          icon: "error",
        });
        document.getElementById("valor").focus();
        return false
    }
    else if(document.getElementById("quantidade").value == "")
    {
        swal({
          title: "Campo obrigatório",
          text: "Quantidade em estoque está vazio",
          icon: "error",
        });
        document.getElementById("quantidade").focus();
        return false
    }
    else if(document.getElementById("quantidade_min").value == "")
    {
        swal({
          title: "Campo obrigatório",
          text: "Quantidade Miníma está vazio!",
          icon: "error",
        });
        document.getElementById("quantidade_min").focus();
        return false
    }
    
   
  
}
 </script>

<script src="../ckeditor/ckeditor.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

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
            <h1 class="h3 display">Cadastro de Produto</h1>
          </header>
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-header d-flex align-items-center">
                  <h2 class="h5 display display">Preencha os campos com o que se pede</h2>
                </div>
                <div class="card-block">
                  
                  <form action="confirmaProduto.php" onsubmit="return valida_form(this)" method="post" enctype="multipart/form-data" align="auto">
                    <div class="form-group">
                      <label>Nome do produto</label>
                      <input type="text" placeholder="Nome do produto" id="nome" name="nome" class="form-control">
                    </div>
					
					<div class="form-group">
                      <label>Valor do produto</label>
                      <input type="text" placeholder="Valor do produto" name="valor" id="valor" class="form-control" onkeyup="moeda(this);">
                    </div>
                      <div class="form-group">
                              <label>Selecione a foto do produto</label>
                          <div style="position:relative;">
                            <a class='btn btn-primary' href='javascript:;'>
                            Clique aqui
                            <input type="file" accept="image/*"style='position:absolute;z-index:2;top:0;left:0;filter: alpha(opacity=0);-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0;background-color:transparent;color:transparent;' name="foto" size="40"  onchange='$("#upload-file-info").html($(this).val());'>
                            </a>
                            &nbsp;
                            <span class='label label-info' id="upload-file-info"></span>
                            </div>
                      </div>
                      <div class="form-group">
                      <label>Quantidade em estoque:</label>
                      <input type="text" placeholder="Quantidade em estoque" id="quantidade" name="quantidade" onkeyup="somenteNumeros(this);" maxlength="7" class="form-control">
                    </div>
                      <div class="form-group">
                      <label>Quantidade Mínima para venda</label>
                      <input type="text" placeholder="Quantidade Miníma para venda" id="quantidade_min" name="quantidade_min" onkeyup="somenteNumeros(this);" maxlength="7" class="form-control">
                    </div>
                      <div class="form-group">
                          <label>Descrição</label>

                            
                                <textarea name="descricao" id="editor1" rows="10" cols="80">

                                </textarea>
                                <script>
                                    // Replace the <textarea id="editor1"> with a CKEditor
                                    // instance, using default configuration.
                                    CKEDITOR.replace( 'editor1' );
                                </script>
                            
                    </div>
                      
                      <div class="form-group">
                          <label>Categoria do produto</label>
                        
                        
                        <div>
                          <input id="id_categoria" type="radio"  value="1"  name="id_categoria">
                          <label for="nivel">Beleza</label>
                        </div>
                        <div>
                          <input id="id_categoria" type="radio"  value="2"  name="id_categoria">
                          <label for="nivel">Boa Forma</label>
                        </div>
                          <div>
                          <input id="id_categoria" type="radio"  value="3"  name="id_categoria">
                          <label for="nivel">Homem</label>
                        </div>
                          <div>
                          <input id="id_categoria" type="radio"  value="4"  name="id_categoria">
                          <label for="nivel">Mulher</label>
                        </div>
                          <div>
                          <input id="id_categoria" type="radio"  value="5" name="id_categoria">
                          <label for="nivel">Melhor Idade</label>
                        </div>
                          <div>
                          <input id="id_categoria" type="radio"  value="6" checked="checked" name="id_categoria">
                          <label for="nivel">Geral</label>
                        </div>
                          <div>
                          <input id="id_categoria" type="radio"  value="7" name="id_categoria">
                          <label for="nivel">Outro</label>
                        </div>
											
                      </div>
                      <div class="form-group">
                        <label>Produto está disponível?</label>
                        
                        <div>
                          <input id="disponivel" type="radio"  value="S"  name="disponivel">
                          <label for="disponivel">Sim</label>
                        </div>
                       <div>
                          <input id="disponivel" type="radio"  value="N"  checked="checked" name="disponivel">
                          <label for="disponivel">Não</label>
                        </div>
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
      
  <?php include("fim.php"); ?>