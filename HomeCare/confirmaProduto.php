<?php
			//include("inicio.php");
            include("../conexao.php");
			
				if (isset($_FILES["foto"]))
				{
					$foto = $_FILES["foto"];
					if(($foto['type'] == "image/jpeg"))
					{
						$nome_foto = "foto".date("dmYhms").".jpg";
						$caminho = "./fotosCadastradas/".$nome_foto;
					}
					else if(($foto['type'] == "image/png"))
					{
						$nome_foto = "foto".date("dmYhms").".png";
						$caminho = "./fotosCadastradas/".$nome_foto;
					}
					else
					{
						$caminho = "/images/semfoto.jpg";
						
					}
						move_uploaded_file($foto['tmp_name'], ".".$caminho);
						
						//pegar os campos $_POST[]... e fazer o upload
						
						$id_categoria 			= $_POST["id_categoria"];
						//$id_empresa 			= $_POST["id_empresa"];
                        $nome 			= $_POST["nome"];						
						$valor 			= $_POST["valor"];						
						$quantidade 	= $_POST["quantidade"];
						$quantidade_min = $_POST["quantidade_min"];
						$descricao 		= $_POST["descricao"];
						$disponivel     = $_POST["disponivel"];
						
						$id_empresa = $_SESSION['id_empresa'];
						  
						 
						
						$sql = "insert into produtos(id_categoria, id_empresa, nome, valor, foto_principal, quantidade, quantidade_minima, descricao, data_cadastro, disponivel)
							values ('$id_categoria','$id_empresa','$nome','$valor','$caminho','$quantidade','$quantidade_min','$descricao', NOW(), '$disponivel');";
						$conexao->query($sql);
						
						
						
						echo ($sql);
						
					
				}
				else
				{	
					echo "Obrigatório anexar arquivo!";
				}
				
				echo "<hr>";
				echo "<a href=\"cadastro.php\"> Cadastre Novamente. </a>";	
				//include("fim.php");
            header("Location:produtoCadastrado.php");
			?>
		