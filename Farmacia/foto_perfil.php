<?php 
include("../conexao.php");
$id_perfil = $_SESSION['id'];
		
		$sql_perfil ="select (Foto) from usuarios where id='$id_perfil'";
		$resultado_perfil=$conexao->query($sql_perfil);
		$linha_perfil = $resultado_perfil->fetch_object();
		$total_perfil= $linha_perfil->Foto;
		
		$sql = "select (Foto) from usuarios where id='$id_perfil'";
											
		
		
		$resultado   = $conexao->query($sql);
		
		while($linha = $resultado->fetch_object())
		{

		$teste = "./$linha->Foto";
		}
?>