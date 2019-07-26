<?php
include("inicio.php");
?>

		<div class="fh5co-hero">
			<div class="fh5co-overlay"></div>
			<div class="fh5co-cover text-center" style="background-image: url(images/fundo_produtos.jpg);">
				
				<div id="fh5co-services">
			<div class="container">
					<div class="row">		
						<div class="col-md6 col-sm-6">
						<div class="services animate-box">
			<?php	

	echo "<div id='logado'>";
		
		if(!isset($_SESSION["Logado"]))
		{
				include ("conexao.php");
				
				
				$ID = $_GET['ID'];
				
				$sql = "select * from produtos where id_produto='$ID'";
				$resultado = $conexao->query($sql);
				$linha = $resultado->fetch_object();
				echo "<br>";
				echo "<br>";
				echo "<br>";
				echo "<br>";
				echo "<div id='nome'>";
				echo "<h1> $linha->nome</h1>";	
				echo "<img src='./$linha->foto_principal' height='250px'>";
				echo "</div>";
				echo "<br>";
				echo "<div id='descricao '>";
				echo "<table border='1'>";
				echo "<br>";
				echo "<br>";
				echo "<h2> $linha->descricao</h1>";
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
				
				$sql = "select * from produtos where id_produto='$ID'";
				$resultado = $conexao->query($sql);
				$linha = $resultado->fetch_object();
				echo "<br>";
				echo "<br>";
				echo "<br>";
				echo "<br>";
				echo "<div id='nome'>";
				echo "<h1> $linha->nome</h1>";	
				echo "<img src='./$linha->foto_principal' height='250px'>";
				echo "</div>";
				echo "<br>";
				echo "<div id='descricao '>";
				echo "<table border='1'>";
				echo "<br>";
				echo "<br>";
				echo "<h2> $linha->descricao</h1>";
				echo "</table>";
				echo "</div>";
				echo "<div id='compra'>";
				echo "<a href='add_carrinho.php?ID=$linha->id_produto'><img src='./images/botaocomprar.png' width='150' height='40' id='imgcompra2' ></a>";
				echo "</div>";
				
				echo "</div>";
		}
			?>
			</div>
			</div>
			</div>
			</div>
			</div>
				
				
				
			</div>

		</div>
		<!-- END: header -->

		

<?php include ("fim.php"); ?>

