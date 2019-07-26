<?php 
include("../conexao.php");
session_start();
$id_cliente = $_SESSION["id"];
$sub_total = $_SESSION['sub_total'];
		 $sql = "select * from clientes where id_cliente='$id_cliente'";	
		
			$resultado = $conexao->query($sql);

			
            $linha = $resultado->fetch_object();


			$nome = $linha->nome;
			$endereco =$linha->endereco;
			$cep = $linha->cep;
			$cidade = $linha->cidade;
			$uf = $linha->uf;
?>