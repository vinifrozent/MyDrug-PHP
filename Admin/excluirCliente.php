<?php 
	   $conexao = new mysqli("localhost","root","","mydrug");
	   
	   $placa = $_POST['placa'];
	   
	   $sql = "update clientes set disponivel='N' where id_cliente='$placa'";
				
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