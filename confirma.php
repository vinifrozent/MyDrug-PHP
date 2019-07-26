<?php
			include("conexao.php");
						
						$nome 			= $_POST["nome"];
						$telefone 			= $_POST["telefone"];						
						$cep 			= $_POST["cep"];						
						$endereco 	= $_POST["rua"];
						$num = $_POST["num"];
						$uf = $_POST["uf"];
						$bairro 		= $_POST["bairro"];
						$cidade     = $_POST["cidade"];
                        $login  	= $_POST["login"];
						$senha  	= $_POST["senha"];
						$email  	= $_POST["email"];
						
						
						
						
						
						
						$sql = "insert into clientes(nome, telefone, cep, endereco, num, uf, bairro, cidade, login, senha, email, data_cadastro, nivel)
							values ('$nome','$telefone','$cep','$endereco','$num','$uf','$bairro','$cidade','$login',md5('$senha'),'$email', NOW(),'Cliente');";
						$conexao->query($sql);
						
						echo "<br>";
						echo "<br>";
						echo "<br>";
						echo "<br>";
						echo "<h2> Cadastrado com sucesso!! </h2>";
						echo ($sql);
						
					
			
				echo "<hr>";
				//echo "<a href=\"index.php\">Voltar para a página inicial</a>";	
				echo "<span><a class='btn btn-primary btn-md' href='index.php'>clique aqui para voltar para a página inicial</a></span>";
				echo "<BR>";
				echo "<BR>";
				echo "<BR>";
				include("fim.php");
header("Location:usuarioCadastrado.php");

			?>
