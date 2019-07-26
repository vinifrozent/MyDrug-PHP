
<?php  include ("conexao.php");
?>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  
   
	<?php

   include("layout.php");
   
   Inicio();
   
?><?php
   include("conexao.php");
   //Verifica se a sessao existe.
   if(!isset($_SESSION["Logado"]))
			//se nao estiver logado, exibe uma label falando que não esta logado e não exibe o botão comprar
	{
		header("Location:login.php");
	}
	//se estiver logado, ele mostra o botao para comprar
	else
	{
		if(isset($_SESSION['Carrinho']))
		{
			$Indice = $_SESSION['Indice'];
			$Carrinho = $_SESSION['Carrinho'];
			
			
			echo "<table border='0' width='96%' align='left' class='table table-hover'>";
			echo "<tr>
				  <td>Foto do Produto</td>
				  <td>Nome do Produto</td>
				  <td>Valor do Produto</td>
				  <td> Excluir</td>
				 
			</tr>";
			$sub_total=0;
			for($i=0; $i < $Indice; $i++)
			{
			   $ID = $Carrinho[$i];
			   if($ID != "X")
			   {
					$sql = "select * from produtos where  id_produto ='$ID'";	   
					$resultado = $conexao->query($sql);
					$linha = $resultado->fetch_object();
					echo "<tr>
					  <td><img src='$linha->foto_principal' width='150' height='100' class='foto_carrinho'></td>
					  <td>$linha->nome</td>
					  <td>$linha->valor</td>
					  <td><a href='confirmaExclusao.php?id_produto=$ID'><button type=\"button\" class=\"btn btn-danger\">Excluir</button></a></td>
								  
					</tr>";
					
					$produto_num = str_replace(',','.',$linha->valor);
					
					$sub_total = $sub_total + $produto_num;
			   }
			}
			//fecha o for
			echo "</table>";
			echo "</div>";
			echo"</div>";
            echo "<br>";
			
            $sub_total = number_format($sub_total, 2, ',', '.');
            echo "<br>";
            echo "<h3>Sub-total R$: $sub_total</h3>";


             echo "<a href='finalizacompra.php?ID=$linha->id_produto'><img src='./images/botaocomprar.png' width='150' height='40' id='imgcompra' ></a>";
            $_SESSION['sub_total'] = $sub_total;
		
		}
		else
		{
			echo "<center><h1>Não há itens no carrinho</h1></center>";
			
		}
		

	}
	
    Fim();