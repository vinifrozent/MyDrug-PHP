<?php
include("../dados_boleto.php");
$nome       = $_SESSION['Nome_completo'];
$id_cliente = $_SESSION["id"];
$sub_total = $_SESSION['sub_total'];
$Indice = $_SESSION['Indice'];
		$Carrinho = $_SESSION['Carrinho'];

		for($i=0;$i<$Indice;$i++)
		{
			if($Carrinho[$i] != "X")
			{
				$SQL_venda = "insert into venda (id_produto,id_cliente,data_venda) values('".$Carrinho[$i]."','$id_cliente',now())";
				$conexao->query($SQL_venda);
				
				$SQL_update = "update produtos set quantidade=quantidade-1 where id_produto='".$Carrinho[$i]."'";
				$conexao->query($SQL_update);
				
				//echo "[$SQL_update]<br> [$SQL_venda]<br>";
			}
		}
echo "

<a href='../compraFinalizada.php'><img src='../images/voltar.png' width='150' height='65'></a>

";
// DADOS DO BOLETO PARA O SEU CLIENTE
$dias_de_prazo_para_pagamento = 5;
$taxa_boleto = 2.95;
$data_venc = date("d/m/Y", time() + ($dias_de_prazo_para_pagamento * 86400));  // Prazo de X dias OU informe data: "13/04/2006"; 
$valor_cobrado = "$sub_total"; // Valor - REGRA: Sem pontos na milhar e tanto faz com "." ou "," ou com 1 ou 2 ou sem casa decimal
$valor_cobrado = str_replace(",", ".",$valor_cobrado);
$valor_boleto=number_format($valor_cobrado+$taxa_boleto, 2, ',', '');

$dadosboleto["nosso_numero"] = "1234567";  // Nosso numero sem o DV - REGRA: Máximo de 7 caracteres!
$dadosboleto["numero_documento"] = $dadosboleto["nosso_numero"];	// Num do pedido ou nosso numero
$dadosboleto["data_vencimento"] = $data_venc; // Data de Vencimento do Boleto - REGRA: Formato DD/MM/AAAA
$dadosboleto["data_documento"] = date("d/m/Y"); // Data de emissão do Boleto
$dadosboleto["data_processamento"] = date("d/m/Y"); // Data de processamento do boleto (opcional)
$dadosboleto["valor_boleto"] = $valor_boleto; 	// Valor do Boleto - REGRA: Com vírgula e sempre com duas casas depois da virgula

// DADOS DO SEU CLIENTE
$dadosboleto["sacado"] = $nome;
$dadosboleto["endereco1"] = $endereco;
$dadosboleto["endereco2"] = "$cidade - $uf -  CEP: $cep";

// INFORMACOES PARA O CLIENTE
$dadosboleto["demonstrativo1"] = "Venda On-line - MyDrug";
$dadosboleto["demonstrativo2"] = ("Taxa bancÃ¡ria - R$ ").number_format($taxa_boleto, 2, ',', '');
$dadosboleto["demonstrativo3"] = "MyDrug - http://www.mydrug.com.br";
$dadosboleto["instrucoes1"] = ("- Sr. Caixa, cobrar multa de 2% apÃ³s o vencimento");
$dadosboleto["instrucoes2"] = ("- Receber atÃ© 10 dias apÃ³s o vencimento");
$dadosboleto["instrucoes3"] = ("- Em caso de dÃºvidas entre em contato conosco: xxxx@xxxx.com.br");
$dadosboleto["instrucoes4"] = ("&nbsp;");

// DADOS OPCIONAIS DE ACORDO COM O BANCO OU CLIENTE
$dadosboleto["quantidade"] = "001";
$dadosboleto["valor_unitario"] = $valor_boleto;
$dadosboleto["aceite"] = "";		
$dadosboleto["especie"] = "R$";
$dadosboleto["especie_doc"] = "DS";


// ---------------------- DADOS FIXOS DE CONFIGURAÇÃO DO SEU BOLETO --------------- //


// DADOS PERSONALIZADOS - SANTANDER BANESPA
$dadosboleto["codigo_cliente"] = "0707077"; // CÃ³digo do Cliente (PSK) (Somente 7 digitos)
$dadosboleto["ponto_venda"] = "1333"; // Ponto de Venda = Agencia
$dadosboleto["carteira"] = "102";  // CobranÃ§a Simples - SEM Registro
$dadosboleto["carteira_descricao"] = "COBRANÃ‡A SIMPLES - CSR";  // Descrição da Carteira

// SEUS DADOS
$dadosboleto["identificacao"] = ("");
$dadosboleto["cpf_cnpj"] = "60.746.948.0001-12";
$dadosboleto["endereco"] = ("PraÃ§a CÃ¢ndida Maria CÃ©sar Sawaya Giana, 64 - Jardim Apolo  ");
$dadosboleto["cidade_uf"] = ("SÃ£o JosÃ© dos Campos/SP");
$dadosboleto["cedente"] = "PC Valle";

// NÃO ALTERAR!
include("include/funcoes_santander_banespa.php"); 
include("include/layout_santander_banespa.php");








// +----------------------------------------------------------------------+
// | BoletoPhp - Versão Beta                                              |
// +----------------------------------------------------------------------+
// | Este arquivo está disponível sob a Licença GPL disponível pela Web   |
// | em http://pt.wikipedia.org/wiki/GNU_General_Public_License           |
// | Você deve ter recebido uma cópia da GNU Public License junto com     |
// | esse pacote; se não, escreva para:                                   |
// |                                                                      |
// | Free Software Foundation, Inc.                                       |
// | 59 Temple Place - Suite 330                                          |
// | Boston, MA 02111-1307, USA.                                          |
// +----------------------------------------------------------------------+

// +----------------------------------------------------------------------+
// | Originado do Projeto BBBoletoFree que tiveram colaborações de Daniel |
// | William Schultz e Leandro Maniezo que por sua vez foi derivado do	  |
// | PHPBoleto de João Prado Maia e Pablo Martins F. Costa                |
// |                                                                      |
// | Se vc quer colaborar, nos ajude a desenvolver p/ os demais bancos :-)|
// | Acesse o site do Projeto BoletoPhp: www.boletophp.com.br             |
// +----------------------------------------------------------------------+

// +----------------------------------------------------------------------------+
// | Equipe Coordenação Projeto BoletoPhp: <boletophp@boletophp.com.br>         |
// | Desenvolvimento Boleto Santander-Banespa : Fabio R. Lenharo                |
// +----------------------------------------------------------------------------+


// ------------------------- DADOS DINÂMICOS DO SEU CLIENTE PARA A GERAÇÃO DO BOLETO (FIXO OU VIA GET) -------------------- //
// Os valores abaixo podem ser colocados manualmente ou ajustados p/ formulário c/ POST, GET ou de BD (MySql,Postgre,etc)	//


?>
