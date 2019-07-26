<?php
include("inicio.php");
?>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
		<script language="JavaScript">
 /*
 A função Mascara tera como valores no argumento os dados inseridos no input (ou no evento onkeypress)
 onkeypress="mascara(this, '## ####-####')"
 onkeypress = chama uma função quando uma tecla é pressionada, no exemplo acima, chama a função mascara e define os valores do argumento na função
 O primeiro valor é o this, é o Apontador/Indicador da Mascara, o '## ####-####' é o modelo / formato da mascara
 no exemplo acima o # indica os números, e o - (hifen) o caracter que será inserido entre os números, ou seja, no exemplo acima o telefone ficara assim: 11-4000-3562
 para o celular de são paulo o modelo deverá ser assim: '## #####-####' [11 98563-1254]
 para o RG '##.###.###.# [40.123.456.7]
 para o CPF '###.###.###.##' [789.456.123.10]
 Ou seja esta mascara tem como objetivo inserir o hifen ou espaço automáticamente quando o usuário inserir o número do celular, cpf, rg, etc 

 lembrando que o hifen ou qualquer outro caracter é contado tambem, como: 11-4561-6543 temos 10 números e 2 hifens, por isso o valor de maxlength será 12
 <input type="text" name="telefone" onkeypress="mascara(this, '## ####-####')" maxlength="12">
 neste código não é possivel inserir () ou [], apenas . (ponto), - (hifén) ou espaço
 */

function valida_form (){
    if(document.getElementById("nome_empresa").value == "")
    {
        //alert('Por favor, preencha o campo nome da empresa');
          swal({
          title: "Campo obrigatório",
          text: "Nome da empresa está vazio!",
          icon: "error",
        });
        document.getElementById("nome_empresa").focus();
        return false
    }
    else if(document.getElementById("telefone").value == "")
    {
        swal({
          title: "Campo obrigatório",
          text: "Telefone da empresa está vazio!",
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
    else if(document.getElementById("nome_responsavel").value == "")
    {
        swal({
          title: "Campo obrigatório",
          text: "Nome do responsável está vazio!",
          icon: "error",
        });
        document.getElementById("nome_responsavel").focus();
        return false
    }
    else if(document.getElementById("email_responsavel").value == "")
    {
        swal({
          title: "Campo obrigatório",
          text: "E-mail do responsável está vazio!",
          icon: "error",
        });
        document.getElementById("email_responsavel").focus();
        return false
    }
    else if(document.getElementById("telefone_responsavel").value.length < 14)
    {
        swal({
          title: "Campo obrigatório",
          text: "Telefone do responsável está vazio!",
          icon: "error",
        });
        document.getElementById("telefone_responsavel").focus();
        return false
    }
    else if(document.getElementById("upload-file-info").value == "")
    {
        swal({
          title: "Campo obrigatório",
          text: "Foto da empresa não selecionada!",
          icon: "error",
        });
        document.getElementById("upload-file-info").focus();
        return false
    }
     else if(document.getElementById("login").value == "")
    {
        swal({
          title: "Campo obrigatório",
          text: "Foto da empresa não selecionada!",
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
            
            
            
 function mascara(t, mask){
 var i = t.value.length;
 var saida = mask.substring(1,0);
 var texto = mask.substring(i)
 if (texto.substring(0,1) != saida){
 t.value += texto.substring(0,1);
 }
 }
 //pesquisa no cep
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
			<div class="fh5co-cover text-center" style="background-image: url(images/fundo_empresa.jpg);">
				<div class="desc animate-box">
					<h2>Registre sua empresa</h2>
					<span>Preencha todos os campos com os dados de sua empresa</span>
				
				</div>
			</div>

		</div>
		<!-- END: header -->
		<div id="fh5co-contact" class="animate-box">
 
			<div class="container">
				<form method="POST" onsubmit="return valida_form(this)" action="confirmaEmpresa.php" >
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Digite o nome de sua empresa" id="nome_empresa" name="nome_empresa">
							</div>
						</div>
						<div class="col-md-2">
							<div class="form-group">
								<input type="text" class="form-control" id="telefone" name="telefone" onkeypress="mascara(this, '## ####-####')" maxlength="12" placeholder="Digite o telefone de sua empresa" >
							</div>
						</div>
						<div class="col-md-2">
							<div class="form-group">
								
								<input name="cep"  class="form-control" placeholder="CEP" onkeypress="mascara(this, '#####-###')" maxlength="9" type="text" id="cep" value="" size="10" maxlength="9" onblur="pesquisacep(this.value);" />
							</div>
						</div>
						<div class="col-md-2">
							<div class="form-group">
								<input name="num" type="text" id="num" size="40" class="form-control" placeholder="Número/bloco" />
							</div>
						</div>
						<div class="col-md-1">
							<div class="form-group">
								<input name="uf" type="text" id="uf" size="2" class="form-control" placeholder="UF" />
								
							</div>
						</div>
						
						
						<div class="col-md-3">
							<div class="form-group">
								<input name="bairro" type="text" id="bairro" size="40" class="form-control" placeholder="Bairro" >
							</div>
						</div>
						
						<div class="col-md-3">
							<div class="form-group">
								<input name="cidade" type="text" id="cidade" size="40" class="form-control" placeholder="Cidade" >
							</div>
						</div>
                        
				        <div class="col-md-4">
							<div class="form-group">
								<input name="rua" type="text" id="rua" size="60" class="form-control" placeholder="Endereço" >
							</div>
						</div>
                        <div class="col-md-5">
							<div class="form-group">
								<input name="nome_responsavel" type="text" class="form-control" id="nome_responsavel" placeholder="Nome do responsável" />
							</div>
						</div>
                        <div class="col-md-5">
							<div class="form-group">
								<input name="email_responsavel" type="text" id="email_responsavel" size="60" class="form-control" placeholder="E-mail do responsável" />
							</div>
						</div>
                        <div class="col-md-3">
							<div class="form-group">
								<input name="telefone_responsavel" id="telefone_responsavel" type="text" onkeypress="mascara(this, '## ####-#####')" maxlength="13" class="form-control" placeholder="Telefone responsável" />
							</div>
						</div>
                        <div class="col-md-3">
							<div class="form-group">
								<input name="senha" type="password" id="senha" size="60" class="form-control" placeholder="Senha" />
							</div>
						</div>
                         <div class="col-md-3">
							<div class="form-group">
								<input name="login" type="text" id="login" size="60" class="form-control" placeholder="Login" />
							</div>
						</div>
                         
                        
                      
                        <div class="col-md-4">
                            <label>Nível de privilégio: </label>  
                            
                                  <input id="nivel" type="radio"  value="HomeCare"  name="nivel">
                                  <label for="nivel">Home Care</label>
                               
                                  <input id="nivel" type="radio"  value="Farmacia" name="nivel">
                                  <label for="nivel">Farmácia</label>
                             
                                   
                        
                        </div>
                        <div class="col-md-12"> </div>
                        
                        <!--<div class="col-md-12">
                        <div class="form-group">
                            
					<label> Escolha a foto da empresa</label>
					  <div style="position:relative;">
						<a class='btn btn-primary' href='javascript:;'>
						Clique aqui
						<input type="file" accept="image/*"style='position:absolute;z-index:2;top:0;left:0;filter: alpha(opacity=0);-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0;background-color:transparent;color:transparent;' name="foto" size="40"  onchange='$("#upload-file-info").html($(this).val());'>
						</a>
						&nbsp;
						<span class='label label-info' id="upload-file-info"></span>
						</div>					
					</div>
                        </div>-->
                        
						
						<div class="col-md-12">
							<div class="form-group">
								<input type="submit" value="Enviar" class="btn btn-danger">
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>

		<?php include("fim.php"); ?>