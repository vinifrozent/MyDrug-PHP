<?php
session_start();
include("conexao.php");

if( isset($_POST['Usuario'])&& isset($_POST['Senha']))
{
	$Usuario = trim($_POST['Usuario']);
	$Senha   = trim($_POST['Senha']);	
	
	$SQL =  "Select nome, senha, id, nivel from usuarios 
	         where login='$Usuario'";	 
	$Resultado = $conexao->query($SQL);
	
	
	if(mysqli_num_rows($Resultado) == 1)
	{
		$Linha = $Resultado->fetch_object();
		$Nome_Completo  = $Linha->nome;
		$SenhaBD        = $Linha->senha;
		$codigo 		= $Linha->id;
		$nivel   		= $Linha->nivel;
		
		if(md5($Senha) == $SenhaBD)
		{
			if($nivel == "Admin")
			{
				
				$_SESSION["Nome_completo"]= $Nome_Completo;
				$_SESSION["Logado"] = "sim";
				$_SESSION["id"] = $codigo;
				$_SESSION["nivel"] = $nivel;
                $_SESSION["foto"] =$foto;
			
				header("Location:index.php");
			}
			
		}
		else
		{
			echo "Usuario incorreto....";
			echo "<a href='login.php'>Voltar</a>";
		}
		
	}
	else
	{
		header("Location:login.php");
	}
}
else
{
	echo "algo aquii";
}