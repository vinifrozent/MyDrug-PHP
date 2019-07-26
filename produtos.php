
<?php
include("inicio.php");
include("conexao.php");
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

		<div id="fh5co-services">
			<div class="container">
				<div class="row row-bottom-padded-lg">
					<div class="col-md-12 animate-box">
						<p class="lead">Nossa loja virtual conta com um imenso estoque de produtos e contato com mais de 5 transportadoras para entregar seu pedido, no menor tempo possível</p>
					</div>
				</div>
				<div class="row">
				<?php
								echo "<div id='logado'>";
		
							if(!isset($_SESSION["Logado"]))
									//se nao estiver logado, exibe uma label falando que não esta logado e não exibe o botão comprar
							{
								echo "<center><h1>Você não esta logado</h1></center>";
														
								$sql = "select * from produtos where quantidade > quantidade_minima and disponivel = 'S' ORDER by data_cadastro DESC;";
								//$sql = "select * from produtos ORDER BY `produtos`.`data_cad` DESC, disponivel = 'S'";
								//SELECT * FROM `produtos` WHERE id_categoria='2' and disponivel='S' and ORDER BY `produtos`.`data_cad` DESC, disponivel = 'S';
								
								$resultado   = $conexao->query($sql);
								
								while($linha = $resultado->fetch_object())
								{
								echo "
									<div class=\"col-md-4 col-sm-4\">
										<div class=\"services animate-box\">
											<span><a href='detalhes.php?ID=$linha->id_produto'><img src='./$linha->foto_principal' class='img_produto' height='150' width='150'></a></span>
											<h2> $linha->nome  </h2>
											<h4>R$ $linha->valor</h4>
											<p>$linha->descricao</p>
										</div>
									</div>";
								}
							}
							else
							{
								$sql = "select * from produtos where quantidade > quantidade_minima and disponivel = 'S' ORDER by data_cadastro DESC;";
								
								
								$resultado   = $conexao->query($sql);
								
								while($linha = $resultado->fetch_object())
								{
									echo "
								<div class=\"col-md-4 col-sm-4\">
										<div class=\"services animate-box\">
											<span><a href='detalhes.php?ID=$linha->id_produto'><img src='./$linha->foto_principal' class='img_produto' height='150' width='150'></a></span>
											<h2> $linha->nome  </h2>
											<h4>R$ $linha->valor</h4>
											
											<a href='add_carrinho.php?ID=$linha->id_produto'><img src='./images/botaocomprar.png' width='150' height='40' id='imgcompra' ></a>
										</div>
									</div>";
								}
							}
								?>
					
					
				</div>
			</div>
		</div>
		</div>
		
		
<?php include("fim.php");?>