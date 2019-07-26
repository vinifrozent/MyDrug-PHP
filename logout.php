<?php
    session_start();
	/** Arquivo de Logout... */
	
	session_unset("Logado");
	session_unset("Nome_completo");
	
	session_destroy();
	
	header("Location:index.php");
?>