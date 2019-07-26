
<?php 
	  //include ("inicio.php");
	  include("conexao.php");
			if(isset($_GET['id']))
		{
			$id=$_GET['id'];
			
           
               // echo $id;
			
			$sql = "update venda set finalizado='S' where id_venda='$id'";
			echo $sql;
			
			/*$resultado = $conexao->query($sql);
			
			$linha = $resultado->fetch_object();
                
            $nome_empresa = $linha->nome_empresa;
            $telefone_empresa = $linha->telefone_empresa;
            $cep = $linha->cep;
            $num = $linha->num;
            $uf = $linha->uf;
            $bairro = $linha->bairro;
            $cidade = $linha->cidade;
            $rua = $linha->rua;
            $nome_responsavel = $linha->nome_responsavel;
            $email_responsavel = $linha->email_responsavel;
            $telefone_responsavel = $linha->telefone_responsavel;
            $nivel = $linha->nivel;
            $login = $linha->login;
            $senha = $linha->senha;
            
            //$sqlCadastro = "insert into empresa(nome_empresa, telefone_empresa, cep, num, uf, bairro, cidade, rua, nome_responsavel, email_responsavel, telefone_responsavel, nivel, login, senha, data_cadastro)
							values ('$nome_empresa','$telefone_empresa','$cep','$num','$uf', '$bairro', '$cidade','$rua','$nome_responsavel','$email_responsavel','$telefone_responsavel','$nivel', '$login', md5('$senha'), NOW());";
						//$conexao->query($sqlCadastro);
                
                        echo $sqlCadastro;
            //$sqlExclui = "Delete from cadastro_pendente where id_empresa='$id'";
              //  $conexao->query($sqlExclui);
                header("Location:empresaCadastrada.php");*/
                
		}
?>