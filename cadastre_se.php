<?php
include("inicio.php");
?>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript">
    
    
    function valida_form ()
    {
        if(document.getElementById("nome").value == "")
        {
         swal({
         title: "Campo obrigatório",
          text: "Nome está vazio!",
          icon: "error",
        });
            document.getElementById("nome").focus();
            return false
        }
        else if(document.getElementById("email").value == "")
        {
             swal({
             title: "Campo obrigatório",
              text: "E-mail está vazio!",
              icon: "error",
            });
            document.getElementById("email").focus();
            return false
        }
        if(document.getElementById("telefone").value.length < 14)
        {
             swal({
             title: "Campo obrigatório",
              text: "Insira um número válido",
              icon: "error",
            });
            document.getElementById("telefone").focus();
            return false
        }
        else if(document.getElementById("cep").value == "")
        {
             swal({
             title: "Campo obrigatório",
              text: "CEP está vazio!",
              icon: "error",
            });
            document.getElementById("cep").focus();
            return false
        }
        
        else if(document.getElementById("rua").value == "")
        {
             swal({
             title: "Campo obrigatório",
              text: "Preencha novamente o CEP",
              icon: "error",
            });
            document.getElementById("rua").focus();
            return false
        }
        else if(document.getElementById("uf").value == "")
        {
             swal({
             title: "Campo obrigatório",
              text: "Preencha novamente o CEP",
              icon: "error",
            });
            document.getElementById("uf").focus();
            return false
        }
        else if(document.getElementById("bairro").value == "")
        {
             swal({
             title: "Campo obrigatório",
             text: "Preencha novamente o CEP",
              icon: "error",
            });
            document.getElementById("bairro").focus();
            return false
        }
        else if(document.getElementById("cidade").value == "")
        {
             swal({
             title: "Campo obrigatório",
              text: "Preencha novamente o CEP",
              icon: "error",
            });
            document.getElementById("cidade").focus();
            return false
        }
        else if(document.getElementById("login").value == "")
        {
             swal({
             title: "Campo obrigatório",
              text: "Login está vazio!",             
              icon: "error",
            });
            document.getElementById("login").focus();
            return false
        }
        else if(document.getElementById("senha").value == "")
        {
             swal({
             title: "Campo obrigatório",
              text: "Senha está vazia!",
              icon: "error",
            });
            document.getElementById("senha").focus();
            return false
        }
    }
    
    
    //......................FIM DA VERIFICAÇÂO DOS CAMPOS..........//
            /* Máscaras ER */
            function mascara(o,f){
                v_obj=o
                v_fun=f
                setTimeout("execmascara()",1)
            }
            function execmascara(){
                v_obj.value=v_fun(v_obj.value)
            }
            function mtel(v){
                v=v.replace(/\D/g,"");             //Remove tudo o que não é dígito
                v=v.replace(/^(\d{2})(\d)/g,"($1) $2"); //Coloca parênteses em volta dos dois primeiros dígitos
                v=v.replace(/(\d)(\d{4})$/,"$1-$2");    //Coloca hífen entre o quarto e o quinto dígitos
                return v;
            }
            function id( el ){
                return document.getElementById( el );
            }
            window.onload = function(){
                id('telefone').onkeyup = function(){
                    mascara( this, mtel );
                }
            }
            
            //....................PESQUISA DE CEP...........................//
            
            function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('rua').value=("");
            document.getElementById('bairro').value=("");
            document.getElementById('cidade').value=("");
            document.getElementById('uf').value=("");
            document.getElementById('ibge').value=("");
    }

    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('rua').value=(conteudo.logradouro);
            document.getElementById('bairro').value=(conteudo.bairro);
            document.getElementById('cidade').value=(conteudo.localidade);
            document.getElementById('uf').value=(conteudo.uf);
            document.getElementById('ibge').value=(conteudo.ibge);
        } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
        }
    }
        
    function pesquisacep(valor) {

        //Nova variável "cep" somente com dígitos.
        var cep = valor.replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('rua').value="...";
                document.getElementById('bairro').value="...";
                document.getElementById('cidade').value="...";
                document.getElementById('uf').value="...";
                

                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = '//viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

                //Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);

            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    };
    
            
</script>


		
		<div class="fh5co-hero">
			<div class="fh5co-overlay"></div>
			<div class="fh5co-cover text-center" style="background-image: url(images/images.png);">
				<div class="desc animate-box">
					<h2>Crie uma conta</h2>
					<span>Para solicitamento de medicamentos</span>
				</div>
			</div>

		</div>
		<!-- END: header -->

		<div id="fh5co-contact" class="animate-box">

			<div class="container">
				<form onsubmit="return valida_form(this)" action="confirma.php" method="post" enctype="multipart/form-data" align="auto">
					
				
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Nome" id="nome" name="nome">
							</div>
						</div>
                        
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Telefone" maxlength="15" id="telefone"name="telefone">
							</div>
						</div>
                        <div class="col-md-2">
							<div class="form-group">
								<input name="cep"  class="form-control" placeholder="CEP (Apenas números)" onkeypress="mascara(this, '#####-###')"  type="text" id="cep" value="" size="10" maxlength="8" onblur="pesquisacep(this.value);" />
							</div>
						</div>
                        <div class="col-md-4">
							<div class="form-group">
								<input name="rua" type="text" id="rua" size="60" class="form-control" placeholder="Endereço" >
							</div>
						</div>
                        <div class="col-md-3">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Número/Bloco" id="num" name="num">
							</div>
						</div>
                        <div class="col-md-1">
							<div class="form-group">
								<input name="uf" type="text" id="uf" size="2" class="form-control" placeholder="UF" />
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input name="bairro" type="text" id="bairro" size="40" class="form-control" placeholder="Bairro" >
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input name="cidade" type="text" id="cidade" size="40" class="form-control" placeholder="Cidade" >
							</div>
						</div>
						
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Login" id="login" name="login">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input type="password" class="form-control" placeholder="Senha" id="senha" name="senha">
							</div>
						</div>
                        
						<?php
						/*
						<div class="col-md-12">
							<div class="form-group">
								<textarea name="" class="form-control" id="" cols="30" rows="7" placeholder="Message"></textarea>
							</div>
						</div>*/
						?>
                        </div>
                    <div class="row">
                    <div class="col-md-6">
							<div class="form-group">
								<input type="email" class="form-control" placeholder="Email" id="email" name="email">
							</div>
						</div>    
						<div class="col-md-12">
							<div class="form-group">
								<input type="submit" value="enviar" class="btn btn-warning">
							</div>
						</div>
					   </div>
				</form>
			</div>
		</div>
            
		
		
		<!-- START a project -->
<?php include("fim.php"); ?>