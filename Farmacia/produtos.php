<?php
include("inicio.php");


?>

		<div class="fh5co-hero">
			<div class="fh5co-overlay"></div>
			<div class="fh5co-cover text-center" style="background-image: url(images/fundo_produtos.jpg);">
				<div class="desc animate-box">
					<h2>Produtos</h2>
					<span>Mais de 5 produtos em nossa loja.</span>
				</div>
			</div>

		</div>
		<!-- END: header -->

		<div id="fh5co-services">
			<div class="container">
			
				<div class="row row-bottom-padded-lg">
					<div class="col-md-12 animate-box">
						<p class="lead">Nossa loja virtual conta com um imenso estoque de produtos e contato com mais de 5 transportadoras para entregar seu pedido, no menor tempo possível</p>
					</div>
				</div>
				<div class="row">		
					<div class="col-md8 col-sm-8">
					<div class="services animate-box">
						<?php			
							
								include("conexao.php");
								$sql = "select * from produtos";
								//$sql = "select * from produtos ORDER BY `produtos`.`data_cad` DESC, disponivel = 'S'";
								//SELECT * FROM `produtos` WHERE id_categoria='2' and disponivel='S' and ORDER BY `produtos`.`data_cad` DESC, disponivel = 'S';
								
								$resultado   = $conexao->query($sql);
								
								while($linha = $resultado->fetch_object())
								{
								
									echo "<div class='col-md8 col-sm-6'>";
									echo "<div class='services animate-box'>";
									echo "<span><a href='detalhes.php?ID=$linha->id'><img src='./$linha->foto_principal' class='img_produto' height='150' width='150'></a></span>";
									echo "<h3> $linha->nome  </h3>";
									echo "<span class='valor'>R$ $linha->valor</span>";
									echo "<br>";
									echo "<span class='descricao'> $linha->descricao</span>";
									echo "<br>";
									echo "<br>";
									echo "<a href='..//..//add_carrinho.php?ID=$linha->id'><img src='..//..//images/botaocomprar.png' width='150' height='40' id='imgcompra' ></a>";
									echo "<span><a class='btn btn-warning' href='..//..//altera.php?ID=$linha->id'>Alterar</a></span>";
									echo "</div>";
									echo "</div>";
								}
							
									
										
							?>
					</div>
					</div>
					</div>
					</div>
					<?php include("fim.php"); ?>