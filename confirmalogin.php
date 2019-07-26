<?php
session_start();
include("conexao.php");

if( isset($_POST['Usuario'])&& isset($_POST['Senha']))
{
	$Usuario = trim($_POST['Usuario']);
	$Senha   = trim($_POST['Senha']);	
	
	
	
	$SQL =  "Select nome, senha, id_cliente, nivel from clientes 
	         where login='$Usuario'";	 
	$Resultado = $conexao->query($SQL);
	
	$SQLEmpresa =  "Select nome_empresa, senha, id_empresa, nivel from empresa 
	         where login='$Usuario'";	 
	$ResultadoEmpresa = $conexao->query($SQLEmpresa);
    
    
    //verifica se tem na tabela empresa
    
	if(mysqli_num_rows($Resultado) == 1)
	{
		$Linha = $Resultado->fetch_object();
		$Nome_Completo  = $Linha->nome;
		$SenhaBD        = $Linha->senha;
		$codigo 		= $Linha->id_cliente;
		$nivel   		= $Linha->nivel;
		
		if(md5($Senha) == $SenhaBD)
		{
			
			if($nivel == "Cliente")
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
	
    else if(mysqli_num_rows($ResultadoEmpresa) == 1)
    {
        $Linha = $ResultadoEmpresa->fetch_object();
		$Nome_Completo  = $Linha->nome_empresa;
		$SenhaBD        = $Linha->senha;
		$codigo 		= $Linha->id_empresa;
		$nivel   		= $Linha->nivel;
        
        
        if ($nivel == "Farmacia")
			{
				$_SESSION["Nome_completo"]= $Nome_Completo;
				$_SESSION["Logado"] = "sim";
				$_SESSION["id_empresa"] = $codigo;
				$_SESSION["nivel"] = $nivel;
                
			    header("Location:Farmacia/index.php");
			}
        else if($nivel == "HomeCare")
            {
				$_SESSION["Nome_completo"]= $Nome_Completo;
				$_SESSION["Logado"] = "sim";
				$_SESSION["id_empresa"] = $codigo;
				$_SESSION["nivel"] = $nivel;
                
			    header("Location:HomeCare/index.php");
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
else{
	echo "algo aquii";
}









