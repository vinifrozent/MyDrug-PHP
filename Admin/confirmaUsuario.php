<?php
			include("inicio.php");
			include("../conexao.php");
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
						
						$nome 			= $_POST["nome"];
						$telefone 			= $_POST["telefone"];						
						
						$email  	= $_POST["email"];
						$login  	= $_POST["login"];
						$senha  	= $_POST["senha"];
						$endereco  	= $_POST["endereco"];
						$num 	= $_POST["num"];
						$bairro 	= $_POST["bairro"];
						$cidade 	= $_POST["cidade"];
						$nivel  	= $_POST["nivel"];
						
						
						
						
						
						
						$sql = "insert into usuarios(nome, telefone, endereco, num, bairro, cidade, email, login, senha, data_cadastro, nivel, foto)
							values ('$nome','$telefone','$endereco', '$num', '$bairro', '$cidade', '$email', '$login', md5('$senha'), NOW(), '$nivel', '$caminho' );";
						$conexao->query($sql);
                        echo $sql;
				}
				else
				{
					echo "ocorreu um erro";
				}
						
						?>
						
		
      
      <section class="forms">
        <div class="container-fluid">
          <header> 
            <h1 class="h1 display">Usuário cadastrado com sucesso</h1>
			<a href="index.php" ><input type="submit" value="OK" class="btn btn-primary"></a>
		</div>
		</section>	

<?php include("fim.php");?>
		