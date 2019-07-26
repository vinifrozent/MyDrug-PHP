<?php
include ("conexao.php");

if(isset($_POST["nome"]))
		{
		$id = $_POST['id'];
		
		$nome = $_POST['nome_responsavel'];
		$email = $_POST['email'];
		$login = $_POST['login'];
		$telefone = $_POST['telefone'];
			
		if (isset($_FILES["foto"]))
				{
					$foto = $_FILES["foto"];
					if(($foto['type'] == "image/jpeg"))
					{
						$nome_foto = "foto".date("dmYhms").".jpg";
						$caminho = "/img/".$nome_foto;
					}
					else if(($foto['type'] == "image/png"))
					{
						$nome_foto = "foto".date("dmYhms").".png";
						$caminho = "/img/".$nome_foto;
					}
					else
					{
						$caminho = "/img//semfoto.jpg";
						
					}
						move_uploaded_file($foto['tmp_name'], ".".$caminho);
					
	
	
	
				}
		$sql = "update empresa set nome_empresa = '$nome', telefone_responsavel='$telefone', email_responsavel = '$email', login = '$login'  where id_empresa = $id";
		
		$resultado = $conexao->query($sql);
		
		header("Location:consultaUsuario.php");
		}
?>