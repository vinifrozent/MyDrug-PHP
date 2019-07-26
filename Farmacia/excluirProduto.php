<?php 
	   $conexao = new mysqli("localhost","root","","mydrug");
	   
	   $placa = $_POST['placa'];
	   
	   $sql = "delete from produtos where id_produto='$placa'";
				
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
	   