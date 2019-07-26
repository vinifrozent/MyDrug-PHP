<?php 
	   $conexao = new mysqli("localhost","root","","mydrug");
	   
	   $placa = $_POST['placa'];
	   
	   $sql = "select v.*, p.nome nomeProduto from produtos p, itens_venda v where v.id_produto = p.id_produto";
				
	   $resultado = $conexao->query($sql);
	   
	   if($resultado)
	   {
		   echo "OK";
	   }
	   else
	   {
		   echo "Erro";
	   }
?>
	   