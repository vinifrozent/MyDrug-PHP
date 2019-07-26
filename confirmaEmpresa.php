<?php
			//include("inicio.php");
			include("conexao.php");
            /*if (isset($_FILES["foto"]))
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
						$caminho = "/img/semfoto.jpg";
						
					}
						move_uploaded_file($foto['tmp_name'], ".".$caminho);
                        */
                        $nome_empresa 			= $_POST["nome_empresa"];
						$telefone 			= $_POST["telefone"];						
						$cep 			= $_POST["cep"];						
						$num 			= $_POST["num"];
						$uf 			= $_POST["uf"];
                        $bairro 	= $_POST["bairro"];
						$cidade 	= $_POST["cidade"];
                        $rua  	= $_POST["rua"];
                        $nome_responsavel  	= $_POST["nome_responsavel"];
                        $email_responsavel  	= $_POST["email_responsavel"];
                        $telefone_responsavel  	= $_POST["telefone_responsavel"];  
						$nivel  	= $_POST["nivel"];
						$login  	= $_POST["login"];
						$senha  	= $_POST["senha"];
                
						
						
						
						
						
						
						/*$sql = "insert into empresa(nome_empresa, telefone_empresa, cep, num, uf, bairro, cidade, rua, nome_responsavel, email_responsavel, telefone_responsavel, nivel, login, senha, data_cadastro, foto)
							values ('$nome_empresa','$telefone','$cep','$num','$uf', '$bairro', '$cidade','$rua','$nome_responsavel','$email_responsavel','$telefone_responsavel','$nivel', '$login', md5('$senha'), NOW(), '$caminho');";*/
                            $sql = "insert into cadastro_pendente(nome_empresa, telefone_empresa, cep, num, uf, bairro, cidade, rua, nome_responsavel, email_responsavel, telefone_responsavel, nivel, login, senha, data_cadastro)
							values ('$nome_empresa','$telefone','$cep','$num','$uf', '$bairro', '$cidade','$rua','$nome_responsavel','$email_responsavel','$telefone_responsavel','$nivel', '$login', md5('$senha'), NOW());";
						$conexao->query($sql);
                
                        echo $sql;
                        
/*
                        
				}
				else
				{
					echo "vish";
                    
				}
						*/
						?>
    <section class="forms">
        <div class="container-fluid">
          <header> 
            <h1 class="h1 display">Usuário cadastrado com sucesso</h1>
			<a href="index.php" ><input type="submit" value="OK" class="btn btn-primary"></a>
		</div>
		</section>	

<?php //include("fim.php");
        header("Location:empresaCadastrada.php");
     ?>
