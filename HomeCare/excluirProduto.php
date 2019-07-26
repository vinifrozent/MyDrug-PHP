<?php 
session_start();
	   $conexao = new mysqli("localhost","root","","mydrug");
	   
	   $placa = $_POST['placa'];
	   	   
	   $sql = "update produtos set disponivel='N' where id_produto='$placa'";
				
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