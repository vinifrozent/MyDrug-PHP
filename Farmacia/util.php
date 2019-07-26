<?php 

		include("../conexao.php");
		$sql = "select count(*) total from usuarios";				
		$resultado   = $conexao->query($sql);		
		$linha = $resultado->fetch_object();
		$total = $linha->total;
		
		$sql1 = "select count(*) total from produtos";
		$resultado1 =$conexao->query($sql1);
		$linha1 = $resultado1->fetch_object();
		$total1= $linha1->total;

        // ultimos usuários cadastrados nas ultimas 24h
        $sql24Usuarios = "select count(*) total from usuarios where data_cadastro between NOW() - INTERVAL 1 DAY and NOW()";
		$resultado24Usuarios =$conexao->query($sql24Usuarios);
		$linha24Usuarios = $resultado24Usuarios->fetch_object();
		$total24Usuarios= $linha24Usuarios->total;

        // ultimos Produtos cadastrados nas ultimas 24h
        $sql24Produtos = "select count(*) total from produtos where data_cadastro between NOW() - INTERVAL 1 DAY and NOW()";
		$resultado24Produtos =$conexao->query($sql24Produtos);
		$linha24Produtos = $resultado24Produtos->fetch_object();
		$total24Produtos= $linha24Produtos->total;
	       

        //ultimos produtos cadastrados nos ultimos 30 dias
		$sql30Produtos = "select count(*) total from produtos where data_cadastro between NOW() - INTERVAL 30 DAY and NOW()";
		$resultado30Produtos =$conexao->query($sql30Produtos);
		$linha30Produtos = $resultado30Produtos->fetch_object();
		$total30Produtos= $linha30Produtos->total;

        //ultimos usuários cadastrados nos ultimos 30 dias
		$sql30Usuarios = "select count(*) total from usuarios where data_cadastro between NOW() - INTERVAL 30 DAY and NOW()";
		$resultado30Usuarios =$conexao->query($sql30Usuarios);
		$linha30Usuarios = $resultado30Usuarios->fetch_object();
		$total30Usuarios= $linha30Usuarios->total;
		



?>