<?php
include("conexao.php"); 
session_start();//include("darBaixa.php");
//include("inicio.php");
//include ("dados_boleto.php");
$nome       = $_SESSION['Nome_completo'];
$id_cliente = $_SESSION["id"];
echo "<h1>Olá $nome, deseja finalizar a compra";
echo "<br>";
echo " no preço de:   ";

		$sub_total = $_SESSION['sub_total'];


// nosso formato
echo 'R$' . $sub_total;
echo " ?";
echo "</h1>";
echo "<br>";
echo "<br>";


		
    
echo "

<a href='finalizacompra_sim.php'><img src='images/sim.png' width='150' height='65'></a>
<a href='index.php'><img src='images/nao.jpg' width='150' height='65'></a>
";

?>