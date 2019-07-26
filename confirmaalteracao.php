
			<?php
			include("inicio.php");
						//$ID = $_GET['ID'];
						$nome 			= $_POST["nome"];
						$id_categoria			= $_POST["id_categoria"];
						$descricao 			= $_POST["descricao"];						
						$valor 	= $_POST["valor"];
						$quantidade = $_POST["quantidade"];
						$quantidade_minima 		= $_POST["quantidade_minima"];
						$disponivel     = $_POST["disponivel"];
						
						
						
						$conexao = new mysqli("localhost","root","","mydrug");
						
						$sql = "update produtos set id_categoria='$id_categoria', nome ='$nome', valor='$valor', quantidade='$quantidade', quantidade_minima='$quantidade_minima, descricao='$descricao', disponivel='$disponivel' where id='$ID';";
						$conexao->query($sql);
						
						echo "<br>";
						echo "<br>";
						echo "<br>";
						echo "<br>";
						echo "<h2> alterado com sucesso!! </h2>";
						echo ($sql);
						
					
			
				echo "<hr>";
				//echo "<a href=\"index.php\">Voltar para a página inicial</a>";	
				echo "<span><a class='btn btn-primary btn-md' href='index.php'>clique aqui para voltar para a página inicial</a></span>";
				echo "<BR>";
				echo "<BR>";
				echo "<BR>";
				include("fim.php");
			?>
		</center>
	</body>
</html>