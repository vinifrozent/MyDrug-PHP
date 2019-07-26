<?php
include ("conexao.php");

if(isset($_POST["nome"]))
		{
		$id = $_POST['id'];
		
		$nome = $_POST['nome'];
		$valor = $_POST['valor'];
		$quantidade = $_POST['quantidade'];
		$quantidade_minima = $_POST['quantidade_minima'];
		$descricao = $_POST['descricao'];
		$disponivel = $_POST['disponivel'];
    
        
			
		
		$sql = "update produtos set nome = '$nome', valor='$valor', quantidade = '$quantidade', quantidade_minima = '$quantidade_minima', descricao='$descricao', disponivel='$disponivel'  where id = '$id'";
		
		$resultado = $conexao->query($sql);
		
		header("Location:produtoAlterado.php");
		}
else
{
    header("Location:vish");
}
?>