<?php include("inicio.php"); include ("conexao.php");?>
<meta name="viewport" content="width=device-width, initial-scale=1">
  
 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
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
			
			$.post("cancelarVenda.php",
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
            <h1 class="h3">Registro de empresas pendentes</h1>
          </header>
          <div class="row">           
            <div class="col-lg-12">
              <div class="card">
                <div class="card-header d-flex align-items-center">
                  <h2 class="h5 display">Tabela de relação de empresaslendentes</h2>
                </div>
                <div class="card-block">
                  <table class="table table-responsive table-striped table-hover" id="example" class="display" cellspacing="0" width="100%">
                    <thead>
                     <tr>
                        <th>Cód Venda</th>
                        <th>Nome Cliente</th>
                        <th>Valor Total</th>
                        <th>Detalhes</th>
                        <th>Cancelar</th>
                        <th>Finalizar</th>
                      </tr>
                    </thead>
                      <tfoot>
						<tr>
							<th>Cód Venda</th>
							<th>Nome Cliente</th>
							<th>Valor Total</th>
							<th>Detalhes</th>
							<th>Cancelar</th>
							<th>Finalizar</th>
						</tr>
                      </tfoot>
				<tbody>
					<?php
		
						
						//$sql = "SELECT V.*,P.nome nome_prod, P.valor, C.* FROM venda V, produtos P, clientes C WHERE V.id_produto = P.id_produto and v.id_cliente = c.id_cliente order by id_venda";
						$sql = "SELECT v.*,c.nome, date_format(v.data_venda,'%d/%m/%Y') FROM venda v,clientes c WHERE c.id_cliente=v.id_cliente and v.finalizado ='N' and v.cancelado = 'N' order by v.id_venda DESC";
						
						$resultado = $conexao->query($sql);
						while($linha = $resultado->fetch_object())
						{
                           
							$codigo_alterar;
							echo "<tr>
								    
									
									
									<td>$linha->id_venda</td>
									<td>$linha->nome</td>
									<td>$linha->total</td>
									<td><button type=\"button\"  id_venda=\"$linha->id_venda\" nome=\"$linha->nome\" class=\"btn btn-warning btn_vermais\" id=\"$linha->id_venda\"><span class=\"glyphicon glyphicon-remove\"></span> Ver Mais</button></td> 
									<td><button type=\"button\"  class=\"btn btn-danger btn_excluir\" id=\"$linha->id_venda\"><span class=\"glyphicon glyphicon-remove\"></span> Excluir</button></td>
									
									<td><a href=\"finalizaCompra.php?id=$linha->id_venda\"><button type='button' class='btn btn-primary'>Finalizar</button></a></td> 
									
								  </tr>";	
									

						}
					
					
					
					
					?>
                      </tbody>
                  </table>
				  
				
	
	
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </section>
     
	<?php include("fim.php"); ?>