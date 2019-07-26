<?php
include("conexao.php");
session_start();
//include ("dados_boleto.php"); 


$nome       = $_SESSION['Nome_completo'];
$id_cliente = $_SESSION["id"];
$sub_total = $_SESSION['sub_total'];


echo "<h1>$nome, a compra ficou no preço de: R$" .$sub_total;
echo "</h1>";

echo "<h2>Selecione o Banco no qual deseja pagar o boleto</h2>";

echo "
<br>
<br>
<a href='boleto/boleto_bb.php'><img src='images/bb_logo.jpg' width='100' height='60' class='img_banco'></a>
&nbsp
<a href='boleto/boleto_bradesco.php'><img src='images/bradescologo.png' width='150' height='60' 'img_banco'></a>
&nbsp
&nbsp

<a href='boleto/boleto_santander_banespa.php'><img src='images/santanderlogo.png' width='130' height='60' 'img_banco'></a>
";


echo "<br>";
echo "<br>";

    


?>
<script>
  window.history.forward(1);//não permite que volte para esta página
</script>