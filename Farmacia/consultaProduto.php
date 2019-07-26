<?php include("inicio.php"); include ("../conexao.php");
?>
<meta name="viewport" content="width=device-width, initial-scale=1">
  

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  
   <script>
    $(document).ready(function(){
		var v_placa;
		$(".btn_excluir").click(function(){
		
		    v_placa = $(this).attr("id");
			
			$("#myModal").modal(); //mostra o modal
		});
		
		$("#btn_cancela").click(function(){
			
			$("#myModal").modal("hide"); //esconde o modal
		});
		
		$("#btn_confirma").click(function(){
			
			$.post("excluirProduto.php",
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
            <h1 class="h3">Registro de usuários</h1>
          </header>
          <div class="row">           
            <div class="col-lg-12">
              <div class="card">
                <div class="card-header d-flex align-items-center">
                  <h2 class="h5 display">Tabela de relação de Produtos</h2>
                </div>
                <div class="card-block">
                  <table class="table table-responsive table-striped table-hover" id="example" class="display" cellspacing="0" width="100%">
                    <thead>
                      <tr>
                        <th>Id</th>
                        <th>Nome do produto</th>
                        <th>Valor</th>
                        <th>Qtd estoque</th>
                        <th>Qtd Mínima</th>
                        <th>Disponível</th>
                        <th>Excluir</th>
                        <th>Alterar</th>
						
                      </tr>
                    </thead>
                      <tfoot>
                        <tr>
                        <th>Id</th>
                        <th>Nome do produto</th>
                        <th>Valor</th>
                        <th>Quantidade estoque</th>
                        <th>Quantidade Mínima</th>
                        <th>Disponível</th>
                        <th>Excluir</th>
                        <th>Alterar</th>
						
                      </tr>
                      
                      </tfoot>
				<tbody>
					<?php
						$id_empresa = $_SESSION['id_empresa'];

                      
						
						//$sql = "select * from produtos order by id_produto";
						$sql = "select * from produtos where id_empresa='$id_empresa'";
						
						
						
						$resultado = $conexao->query($sql);
						while($linha = $resultado->fetch_object())
						{
							$codigo_alterar;
							echo "<tr>
									<td>$linha->id_produto</td>
									<td>$linha->nome</td>
									<td>$linha->valor</td>
									
									<td>$linha->quantidade</td>
									<td>$linha->quantidade_minima</td>
									
									<td>$linha->disponivel</td>
									
									<td><button type=\"button\"  class=\"btn btn-danger btn_excluir\" id=\"$linha->id_produto\"><span class=\"glyphicon glyphicon-remove\"></span> Excluir</button></td>
									
									<td><a href=\"alterarProduto.php?id=$linha->id_produto\"><button type='button' class='btn btn-warning'>Alterar</button></a></td> 
									
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