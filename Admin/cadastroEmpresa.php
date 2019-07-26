<?php include("inicio.php"); include ("conexao.php");?>
<meta name="viewport" content="width=device-width, initial-scale=1">
  
 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
	  <div class="modal-header"></div>
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Visualizar modelo</h4>
        </div>
		
        <div class="modal-body">
		
			<div id="mapa" style="height: auto; width: auto;">
			
				<img src="" align="center" width="500px" height="500px" id="foto">
				<br>
				<br>
				
				<h3> Nome do modelo: </h3>
				<p id="nome_empresa"></p>
				
				<h3>Categoria do modelo:</h2>
				<p id="nome_empresa"></p>
			
			</div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        </div>
      </div>
      
    </div>
  </div>
  
  
  
  
   <script>

   
    $(document).ready(function(){
        $(".btn-warning").click(function(){
				 $(".modal").modal();
				 var nome_empresa = $(this).attr("nome_empresa");
				 var teste = $(this).attr("modelo");
				 var Foto = $(this).attr("Foto");
				 
				 //var longitude = $(this).attr("long");
				 
				 //alert("categoria = "+categoria+" categoria="+teste);
				 //initialize(latitude, longitude);
				 //$("#conteudo").html(teste);
				 $("#nome_empresa").html(nome_empresa);
				 //$("#foto").attr("src",Foto);
				 $("#myModal").modal("open");
				 
			 });
		
		
		
		//excluir
		var v_placa;
		$(".btn_excluir").click(function(){
		
		    v_placa = $(this).attr("id");
			
			$("#myModal").modal(); //mostra o modal
		});
		
		
		
		$("#btn_cancela").click(function(){
			
			$("#myModal").modal("hide"); //esconde o modal
		});
		
		
		$("#btn_confirma").click(function(){
			
			$.post("excluir.php",
			{
			   placa:v_placa	
			},
			function(resposta)
			{
				if(resposta.trim() == "OK")
				{			
					$("#"+v_placa).parents("tr").fadeOut(1000);
					$("#myModal").modal("hide"); //esconde o modal
				}
			});
		});
		$('#myTable').DataTable();
	
	});
  </script>
      <div class="breadcrumb-holder">   
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active">Charts</li>
          </ul>
        </div>
      </div>
      <section class="charts">
        <div class="container-fluid">
          <header> 
            <h1 class="h3">Registro de empresas pendentes</h1>
          </header>
          <div class="row">           
            <div class="col-lg-12">
              <div class="card">
                <div class="card-header d-flex align-items-center">
                  <h2 class="h5 display">Tabela de relação de empresas pendentes</h2>
                </div>
                <div class="card-block">
                  <table class="table table-responsive table-striped table-hover" id="example" class="display" cellspacing="0" width="100%">
                    <thead>
                      <tr>
                        <th>id</th>
                        <th>Nome da Empresa</th>
                        <th>Tel Responsável</th>
                        <th>E-mail Responsável</th>
                        <th>Login</th>
                        
                        <th>Excluir</th>
                        <th>Cadastrar</th>
						
                      </tr>
                    </thead>
                      <tfoot>
                        <tr>
                        <th>id</th>
                        <th>Nome da Empresa</th>
                        <th>Tel Responsável</th>
                        <th>E-mail Responsável</th>
                        <th>Login</th>
                        
                        <th>Excluir</th>
                        <th>Cadastrar</th>
						
                      </tr>
                      
                      </tfoot>
				<tbody>
					<?php
		
						
						$sql = "select * from cadastro_pendente order by id_empresa";
						
						$resultado = $conexao->query($sql);
						while($linha = $resultado->fetch_object())
						{
							$codigo_alterar;
							echo "<tr>
									<td>$linha->id_empresa</td>
									<td>$linha->nome_empresa</td>
									<td>$linha->telefone_empresa</td>
									
									<td>$linha->email_responsavel</td>
									<td>$linha->login</td>
									
									
									
									<td><button type=\"button\"  class=\"btn btn-danger btn_excluir\" id=\"$linha->id_empresa\"><span class=\"glyphicon glyphicon-remove\"></span> Excluir</button></td>
									
									<td><a href=\"confirmaEmpresa.php?id=$linha->id_empresa\"><button type='button' class='btn btn-primary'>Cadastrar</button></a></td> 
									
								  </tr>";	
									

						}
					
					
					
					
					?>
                      </tbody>
                  </table>
				  
				 
	<!-- Modal -->
		<div id="myModal" class="modal fade" role="dialog">
	  <div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Aviso</h4>
		  </div>
		  <div class="modal-body">
			<p>Deseja realmente Excluir o Usuário?</p>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-primary" id="btn_confirma">Sim</button>
			<button type="button" class="btn btn-danger" id="btn_cancela">Não</button>
		  </div>
		</div>

	  </div>
	</div>
	<!-- Fecha o Bloco Modal -->
	<!-- modal pergunta -->
	
	
	<div id="Modalpergunta" class="modal fade" role="dialog">
	  <div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Alterar</h4>
		  </div>
		  <div class="modal-body">
			<p>Deseja realmente Alterar o Usuário?</p>
		  </div>
	
		  <div class="modal-footer">
			<button type="button" class="btn btn-primary" id="btn_confirma_alteracao">Sim</button>
			<button type="button" class="btn btn-danger" id="btn_cancela2">Não</button>
		  </div>
		</div>

	  </div>
	</div>
	
	
	<!-- Modal alterar -->
		<div id="ModalAlterar" class="modal fade" role="dialog">
	  <div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Alterar</h4>
		  </div>
		  <div class="modal-body">
			<p>Deseja realmente Alterar o Usuário?</p>
		  </div>
		  		  
		  <div class="modal-body">
			<p> Nome do usuário </p>
			<input type="text" name="nome" value="<?php echo ""; ?>">
		  </div>
		  <div class="modal-body">
			<p> Telefone do usuário </p>
			<input type="text" name="nome" value="<?php echo ""; ?>">
		  </div>
		  <div class="modal-body">
			<p> E-mail do usuário </p>
			<input type="text" name="nome" value="<?php echo ""; ?>">
		  </div>
		  <div class="modal-body">
			<p> Login do usuário </p>
			<input type="text" name="nome" value="<?php echo ""; ?>">
		  </div>
		  <div class="modal-body">
			
		  </div>
		  
		  <div class="modal-footer">
			<button type="button" class="btn btn-primary" id="btn_confirma_alteracao">Sim</button>
			<button type="button" class="btn btn-danger" id="btn_cancela2">Não</button>
		  </div>
		</div>

	  </div>
	</div>
	<!-- Fecha o Bloco Modal -->
	
	
	
	
	
	
	
	
	
	
	
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </section>
     
	<?php include("fim.php"); ?>