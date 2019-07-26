<?php
include("../dados_boleto.php");
$taxa_boleto = 2.95;
$nome       = $_SESSION['Nome_completo'];
$id_cliente = $_SESSION["id"];
$sub_total = $_SESSION['sub_total'];
$total = $taxa_boleto +  str_replace(',','.',$sub_total);

$total_frmt = number_format($total, 2, ',', '.');
$Indice = $_SESSION['Indice'];
		$Carrinho = $_SESSION['Carrinho'];

		$SQL_venda = "insert into venda (id_cliente,subtotal,imposto,total,data_venda) values('$id_cliente','$sub_total','$taxa_boleto','$total_frmt',now())";
		$conexao->query($SQL_venda);
		$id_venda = $conexao->insert_id;

		for($i=0;$i<$Indice;$i++)
		{
			if($Carrinho[$i] != "X")
			{
				$id_produto = $Carrinho[$i];
				$sql = "select * from produtos where id_produto ='$id_produto'";	   
				$resultado = $conexao->query($sql);
				$linha = $resultado->fetch_object();
				$preco = $linha->valor;
					
				$sql_produto = "INSERT INTO itens_venda(id_venda,id_produto,preco) VALUES('$id_venda','$id_produto', '$preco')";
				$conexao->query($sql_produto);
				
				$SQL_update = "update produtos set quantidade=quantidade-1 where id_produto='$id_produto'";
				$conexao->query($SQL_update);
				
			}
		}
echo "

<a href='../compraFinalizada.php'><img src='../images/voltar.png' width='150' height='65'></a>

";
	
$dias_de_prazo_para_pagamento = 5;
$data_venc = date("d/m/Y", time() + ($dias_de_prazo_para_pagamento * 86400));  // Prazo de X dias OU informe data: "13/04/2006";
$valor_cobrado = "$sub_total"; // Valor - REGRA: Sem pontos na milhar e tanto faz com "." ou "," ou com 1 ou 2 ou sem casa decimal
$valor_cobrado = str_replace(",", ".",$valor_cobrado);
$valor_boleto=number_format($valor_cobrado+$taxa_boleto, 2, ',', '');

$dadosboleto["nosso_numero"] = "87656";  // Nosso numero sem o DV - REGRA: M�ximo de 11 caracteres!
$dadosboleto["numero_documento"] = $dadosboleto["nosso_numero"];	// Num do pedido ou do documento = Nosso numero
$dadosboleto["data_vencimento"] = $data_venc; // Data de Vencimento do Boleto - REGRA: Formato DD/MM/AAAA
$dadosboleto["data_documento"] = date("d/m/Y"); // Data de emiss�o do Boleto
$dadosboleto["data_processamento"] = date("d/m/Y"); // Data de processamento do boleto (opcional)
$dadosboleto["valor_boleto"] = $valor_boleto; 	// Valor do Boleto - REGRA: Com v�rgula e sempre com duas casas depois da virgula

// DADOS DO SEU CLIENTE
$dadosboleto["sacado"] = $nome;
$dadosboleto["endereco1"] = $endereco;
$dadosboleto["endereco2"] = "$cidade - $uf -  CEP: $cep";

// INFORMACOES PARA O CLIENTE
$dadosboleto["demonstrativo1"] = "Venda On-line - PC Valle";
$dadosboleto["demonstrativo2"] = utf8_encode("Taxa banc�ria - R$ ").number_format($taxa_boleto, 2, ',', '');
$dadosboleto["demonstrativo3"] = "PC Valle - http://www.pcvalle.com.br";
$dadosboleto["instrucoes1"] = utf8_encode("- Sr. Caixa, cobrar multa de 2% ap�s o vencimento");
$dadosboleto["instrucoes2"] = utf8_encode("- Receber at� 10 dias ap�s o vencimento");
$dadosboleto["instrucoes3"] = utf8_encode("- Em caso de d�vidas entre em contato conosco: xxxx@xxxx.com.br");
$dadosboleto["instrucoes4"] = utf8_encode("&nbsp;");

// DADOS OPCIONAIS DE ACORDO COM O BANCO OU CLIENTE
$dadosboleto["quantidade"] = "001";
$dadosboleto["valor_unitario"] = $valor_boleto;
$dadosboleto["aceite"] = utf8_encode("");
$dadosboleto["especie"] = utf8_encode("R$");
$dadosboleto["especie_doc"] = utf8_encode("DS");


// ---------------------- DADOS FIXOS DE CONFIGURA��O DO SEU BOLETO --------------- //


// DADOS DA SUA CONTA - Bradesco
$dadosboleto["agencia"] = "1100"; // Num da agencia, sem digito
$dadosboleto["agencia_dv"] = "0"; // Digito do Num da agencia
$dadosboleto["conta"] = "0102003"; 	// Num da conta, sem digito
$dadosboleto["conta_dv"] = "4"; 	// Digito do Num da conta

// DADOS PERSONALIZADOS - Bradesco
$dadosboleto["conta_cedente"] = "0102003"; // ContaCedente do Cliente, sem digito (Somente N�meros)
$dadosboleto["conta_cedente_dv"] = "4"; // Digito da ContaCedente do Cliente
$dadosboleto["carteira"] = "06";  // C�digo da Carteira: pode ser 06 ou 03

// SEUS DADOS
$dadosboleto["identificacao"] = utf8_encode("");
$dadosboleto["cpf_cnpj"] = "60.746.948.0001-12";
$dadosboleto["endereco"] = utf8_encode("Pra�a C�ndida Maria C�sar Sawaya Giana, 64 - Jardim Apolo  ");
$dadosboleto["cidade_uf"] = utf8_encode("S�o Jos� dos Campos/SP");
$dadosboleto["cedente"] = "PC Valle";

// N�O ALTERAR!
include("include/funcoes_bradesco.php");
include("include/layout_bradesco.php");






// +----------------------------------------------------------------------+
// | BoletoPhp - Vers�o Beta                                              |
// +----------------------------------------------------------------------+
// | Este arquivo est� dispon�vel sob a Licen�a GPL dispon�vel pela Web   |
// | em http://pt.wikipedia.org/wiki/GNU_General_Public_License           |
// | Voc� deve ter recebido uma c�pia da GNU Public License junto com     |
// | esse pacote; se n�o, escreva para:                                   |
// |                                                                      |
// | Free Software Foundation, Inc.                                       |
// | 59 Temple Place - Suite 330                                          |
// | Boston, MA 02111-1307, USA.                                          |
// +----------------------------------------------------------------------+

// +----------------------------------------------------------------------+
// | Originado do Projeto BBBoletoFree que tiveram colabora��es de Daniel |
// | William Schultz e Leandro Maniezo que por sua vez foi derivado do	  |
// | PHPBoleto de Jo�o Prado Maia e Pablo Martins F. Costa			       	  |
// | 																	                                    |
// | Se vc quer colaborar, nos ajude a desenvolver p/ os demais bancos :-)|
// | Acesse o site do Projeto BoletoPhp: www.boletophp.com.br             |
// +----------------------------------------------------------------------+

// +----------------------------------------------------------------------+
// | Equipe Coordena��o Projeto BoletoPhp: <boletophp@boletophp.com.br>   |
// | Desenvolvimento Boleto Bradesco: Ramon Soares						            |
// +----------------------------------------------------------------------+


// ------------------------- DADOS DIN�MICOS DO SEU CLIENTE PARA A GERA��O DO BOLETO (FIXO OU VIA GET) -------------------- //
// Os valores abaixo podem ser colocados manualmente ou ajustados p/ formul�rio c/ POST, GET ou de BD (MySql,Postgre,etc)	//

// DADOS DO BOLETO PARA O SEU CLIENTE
?>