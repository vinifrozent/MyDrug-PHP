<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<?php 
include("inicio.php");
include("fim.php");
header("Location:index.php",2);
?>
<script>
  window.history.forward(1);//não permite que volte para esta página
   window.setTimeout("location.href='index.php';", 2000);// rediciona o usuário para outra página

		$(document).ready(function(){
            
            swal("Empresa cadastrada com sucesso!");
		  		
			 
		  
		});
</script>
