<?php 
	   $conexao = new mysqli("localhost","root","","mydrug");
	   
	   $placa = $_POST['placa'];
	   
	   $sql = "update empresa set disponivel='N' where id_empresa='$placa'";
				
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