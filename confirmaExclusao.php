<?php
   session_start();
   $ID = $_GET['id_produto'];
   //Verifica se a sessao existe.
   if(isset($_SESSION['Carrinho']))
   {
		$Indice = $_SESSION['Indice'];
		$Carrinho = $_SESSION['Carrinho'];

		for($i=0;$i<$Indice;$i++)
		{
			if($ID == $Carrinho[$i])
			{
				$Carrinho[$i] = "X";
				
			}
		}
 
   }
   else
   {
	  //não tem carrinho ainda, cria um vazio
	  $Indice = 0;
	  $Carrinho = "";
   }
   
    
   $_SESSION['Carrinho'] = $Carrinho;
   header("Location:carrinho.php");
?>



