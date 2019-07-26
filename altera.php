<?php
include("inicio.php");?>

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
						<?php

	echo "<div id='logado'>";
		
		if(!isset($_SESSION["Logado"]))
		{
				include ("conexao.php");
				
				
				$ID = $_GET['ID'];
				
				$sql = "select * from produtos where id='$ID'";
				$resultado = $conexao->query($sql);
				$linha = $resultado->fetch_object();
			
			
				echo "<img src='./$linha->foto_principal' height='250px'>";
				echo "</div>";
				echo "<br>";
				echo "<div id='descricao '>";
				echo "<table border='1'>";
				echo "<br>";
				echo "<br>";
				echo "</table>";
				echo "</div>";
				echo "<div id='compra'>";
				//echo "<a href='add_carrinho.php?ID=$linha->id'><img src='./imagens/botaocomprar.png' width='150' height='40' id='imgcompra2' ></a>";
				echo "</div>";
				
				echo "</div>";
		}
		else
		{
			include ("conexao.php");
				
				
				$ID = $_GET['ID'];
				
				$sql = "select * from produtos where id='$ID'";
				$resultado = $conexao->query($sql);
				$linha = $resultado->fetch_object();
				
				echo "<img src='./$linha->foto_principal' height='250px'>";
				echo "</div>";
				echo "<br>";
				echo "<div id='descricao '>";
				echo "<table border='1'>";
				
				echo "</table>";
				echo "</div>";
				echo "<div id='compra'>";
				echo "<a href='add_carrinho.php?ID=$linha->id'><img src='./images/botaocomprar.png' width='150' height='40' id='imgcompra2' ></a>";
				echo "</div>";
				echo "</div>";
		}
			?>
						<form action="confirmaalteracao.php" method="post" enctype="multipart/form-data" align="auto">
						<?php
						//Falta colocar o confirmaalteração para mandar os dados para o bd
						// colocar todos os itens dentro do form para mandar para label
						
						
						
						?>
							<div class="col-md-12 animate-box">
						<div class="col-md-6">
							<div class="form-group">
							<label>Nome do produto:</label>
								<input type="text" class="form-control" placeholder="Nome" name="nome" value="<?php echo "$linha->nome"; ?>">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
							<label>Descrição do produto:</label>
								<input type="text" class="form-control" placeholder="Descrição do produto" name="descricao" value="<?php echo "$linha->descricao"; ?>">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
							<label>Código da categoria:</label>
								<input type="text" class="form-control" placeholder="Código categoria" name="id_categoria" value="<?php echo "$linha->id_categoria"; ?>">
							</div>
						</div>
							<div class="col-md-6">
							<div class="form-group">
							<label>Disponivel:</label>
								<input type="text" class="form-control" placeholder="Disponível" name="disponivel" value="<?php echo "$linha->disponivel"; ?>">
							</div>
						</div>
							<div class="col-md-6">
							<div class="form-group">
							<label>Quantidade:</label>
								<input type="text" class="form-control" placeholder="Quantidade" name="quantidade" value="<?php echo "$linha->quantidade"; ?>">
							</div>
						</div>
							<div class="col-md-6">
							<div class="form-group">
							<label>Quantidade miníma:</label>
								<input type="text" class="form-control" placeholder="Quantidade miníma" name="quantidade_minima" value="<?php echo "$linha->quantidade_minima"; ?>">
							</div>
						</div>
							<div class="col-md-2">
							<div class="form-group">
							<label>Valor:</label>
								<input type="text" class="form-control" placeholder="Valor" name="valor" value="<?php echo "$linha->valor"; ?>">
							</div>
						</div>
							
								<div class="col-md-12">
							<div class="form-group">
								<input type="submit" value="enviar" class="btn btn-warning">
							</div>
						</div>
							
						
						
						
						
						
						
						
						</div>
			
			
			
			
			
			
			</div>
			</div>
			</div>
			</div>
			</div>
				
				
				
			</div>

		</div>
		<!-- END: header -->

		

<?php include ("fim.php"); ?>


	
				<div class="row">
				alguma coisa legal aki
				</div>

		</div>
<?php include("fim.php"); ?>		